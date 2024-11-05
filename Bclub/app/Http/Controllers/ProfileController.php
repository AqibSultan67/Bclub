<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Validate only jabber and email fields
        $request->validate([
            'jabber' => 'nullable|max:32|unique:users,jabber,' . Auth::id(),
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->jabber = $request->input('jabber');
        $user->email = $request->input('email');

        // Save the updated user details
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
