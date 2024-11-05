<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Show the admin login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an admin login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to find the admin by username
        $admin = Admin::where('username', $request->username)->first();

        // Check if the admin exists and the password is correct
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Log in the admin
            Auth::guard('admin')->login($admin);

            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // If credentials do not match, redirect back with an error message
        return redirect()->back()->withErrors(['username' => 'Invalid credentials']);
    }

    /**
     * Log the admin out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Log out the admin
        Auth::guard('admin')->logout();

        // Redirect to the admin login page
        return redirect()->route('admin.login');
    }
}
