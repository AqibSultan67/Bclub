<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function show()
    {
        // Get deposits for the authenticated user only
        $deposits = Deposit::where('user_id', Auth::id())->get();

        return view('billing', compact('deposits'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'amount' => 'required|numeric', // Adjust minimum amount as needed
            'paymentMethod' => 'required|string'
        ]);

        // Retrieve the input values
        $paymentMethod = $request->input('paymentMethod');
        $amount = $request->input('amount');

        // Fetch the payment method details from the database
        $paymentMethodData = PaymentMethod::where('paymentMethod', $paymentMethod)->first();

        // If the payment method exists, create a new deposit record
        if ($paymentMethodData) {
            Deposit::create([
                'system' => $paymentMethod,
                'amount' => $amount,
                'status' => 'pending',
                'date' => now(),
                'user_id' => Auth::id() // Set the user_id of the authenticated user
            ]);

            // Redirect back with the payment address and QR code in the session
            return redirect()->back()->with([
                'paymentAddress' => $paymentMethodData->paymentAddress,
                'qrCode' => asset('storage/' . $paymentMethodData->qrCode),
                'amount' => $amount,
                'paymentMethod' => $paymentMethod
            ]);
        }

        // If the payment method is not found, redirect back with an error message
        return redirect()->back()->with('error', 'Payment method not found.');
    }
}
