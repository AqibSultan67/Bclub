<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\Admin;
use App\Notifications\AdminResetPasswordNotification;

class AdminForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('admin.auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Get the status of the password reset link request
        $status = Password::broker('admins')->sendResetLink(
            $request->only('email'),
            function ($admin, $token) {
                // Notify the admin with the reset password link
                $admin->notify(new AdminResetPasswordNotification($token));
            }
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'A password reset link has been sent to your email. Please check your email.');
        }

        return back()->withErrors(['email' => __($status)]);
    }
}
