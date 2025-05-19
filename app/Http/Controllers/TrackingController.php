<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class TrackingController extends Controller
{
    public function showForm()
    {
        return view('tracking.form');
    }

    public function track(Request $request)
    {
        $request->validate([
            'tracking_code' => 'required|string',
        ]);

        $quote = Quote::where('tracking_code', $request->tracking_code)->first();

        if (!$quote) {
            return back()->withErrors(['tracking_code' => 'Tracking code not found.']);
        }

        return view('tracking.result', compact('quote'));
    }
}
