<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Scanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScennerController extends Controller
{
    public function index()
    {  $scanners = Scanner::withCount('events')->get();

        return view('admin.pages.scanner',compact('scanners'));
    }

    public function create()
    {

        return view('admin.pages.add_scanner');
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
    'first_name' => 'required|string|max:255|regex:/^[A-Za-z]+$/',
    'last_name'  => 'required|string|max:255|regex:/^[A-Za-z]+$/',
    'email'      => 'required|email|unique:scanners,email',
    'phone'      => 'required|regex:/^[0-9]+$/',
    'password'   => 'required|string|min:6',
    'status'     => 'required|in:0,1'
]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'fails',
                'errors' => $validator->errors(),
            ], 422);
        }

        $scanner = Scanner::create($request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'password',
            'status',
        ]));

        return response()->json([
            'status' => true,
            'success' => 'Scanner has been created successfully'
        ]);
    }
}
