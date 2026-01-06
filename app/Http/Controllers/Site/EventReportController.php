<?php

namespace App\Http\Controllers\Site;

use App\Models\EventReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventReportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reason' => 'required|string|max:255',
            'message' => 'required|string',
            'event_id' => 'required|exists:events,id',
        ]);

        EventReport::create($request->all());

        return redirect()->back()->with('success', 'Report submitted successfully!');
    }
}
