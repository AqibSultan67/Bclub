<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    public function updatePassword(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user's password
        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
