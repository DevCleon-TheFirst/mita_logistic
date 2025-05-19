<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'origin' => 'required|string',
            'destination' => 'required|string',
            'weight' => 'required|numeric',
            'item_description' => 'nullable|string',
            'dimensions' => 'nullable|string',
        ]);

        $quote = Quote::create([
            'user_id' => Auth::id(),
            'origin' => $validated['origin'],
            'destination' => $validated['destination'],
            'weight' => $validated['weight'],
            'item_description' => $validated['item_description'] ?? null,
            'dimensions' => $validated['dimensions'] ?? null,
            'quote_amount' => $validated['weight'] * 500, // Example calculation
            'status' => 'pending',
            'is_complete' => false,
            'loading_status' => 'not_loaded',
        ]);

        return redirect()->back()->with('success', 'Quote created. Your tracking code is: ' . $quote->tracking_code);
    }

    public function show(){
        return view('quote');
    }
}
