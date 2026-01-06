<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{  public function index(){
        $settings = Setting::first();
           if (!$settings) {
        $settings = Setting::create([]);
    }
       return view('admin.pages.setting',compact('settings'));
    }
    public function update(Request $request, $id)
{
    // Validation
    $request->validate([
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string',
        'lat' => 'nullable|string',
        'long' => 'nullable|string',
        'Instagram' => 'nullable|url',
        'Facebook' => 'nullable|url',
        'Twitter' => 'nullable|url',
        'Pinterest' => 'nullable|url',
        'app_name' => 'nullable|string|max:255',
        'footertext' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'favicon' => 'nullable|image|mimes:jpg,jpeg,png,webp,ico',
        'maintenance_text' => 'nullable|string',
        'maintenance_mode' => 'nullable|boolean',
        'maintenance_bgimg' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    $setting = Setting::findOrFail($id);

    // Fill fields
    $setting->fill($request->only([
        'name','email','phone','address','lat','long',
        'Instagram','Facebook','Twitter','Pinterest',
        'app_name','footertext','maintenance_text'
    ]));

    // Handle file uploads
    if($request->hasFile('logo')){
        $logoName = time().'_'.$request->logo->getClientOriginalName();
        $request->logo->move(public_path('uploads'), $logoName);
        $setting->logo = $logoName;
    }

    if($request->hasFile('favicon')){
        $faviconName = time().'_'.$request->favicon->getClientOriginalName();
        $request->favicon->move(public_path('uploads'), $faviconName);
        $setting->favicon = $faviconName;
    }

    if($request->hasFile('maintenance_bgimg')){
        $bgName = time().'_'.$request->maintenance_bgimg->getClientOriginalName();
        $request->maintenance_bgimg->move(public_path('uploads'), $bgName);
        $setting->maintenance_bgimg = $bgName;
    }

    // Maintenance mode
    $setting->maintenance_mode = $request->maintenance_mode ? 1 : 0;

    // Save settings
    $setting->save();

    // Determine changed fields
    $changedFields = [];
    foreach ($request->only([
        'name','email','phone','address','lat','long',
        'Instagram','Facebook','Twitter','Pinterest',
        'app_name','footertext'
    ]) as $key => $value) {
        if($setting->wasChanged($key)){
            $changedFields[] = $key;
        }
    }
    if($request->hasFile('logo')) $changedFields[] = 'Logo';
    if($request->hasFile('favicon')) $changedFields[] = 'Favicon';
    if($request->hasFile('maintenance_bgimg')) $changedFields[] = 'Maintenance Background Image';

    // Return AJAX JSON response if request is AJAX
    if($request->ajax()){
        $message = !empty($changedFields) ? implode(', ', $changedFields).' updated successfully!' : 'No changes made.';
        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }

    // Normal redirect for non-AJAX (optional)
    return redirect()->back()->with('success', 'Settings updated successfully!');
}

}
