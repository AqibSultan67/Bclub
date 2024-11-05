<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;

class HeaderController extends Controller
{
    /**
     * Fetch the user's total approved deposit amount.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserBalance()
    {
        // Ensure the user is authenticated
        if (!auth()->check()) {
            return 0.00; // If no user is authenticated, return 0.00
        }

        // Calculate the total approved deposit amount for the authenticated user
        $user_id = auth()->id();
        $balance = Deposit::where('user_id', $user_id)
                          ->where('status', 'approved')
                          ->sum('amount');

        return $balance;
    }
}
