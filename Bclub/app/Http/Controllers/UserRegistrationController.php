<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CaptchaImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('UserRegistration');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:30',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|max:30',
            'jabber' => 'nullable|max:32|unique:users,jabber',
            'captcha_image_id' => 'required|exists:captcha_images,id',
            'captcha_answer' => 'required',
            'rules' => 'accepted',
        ]);

        $captchaImage = CaptchaImage::find($validatedData['captcha_image_id']);

        if ($captchaImage->answer !== $validatedData['captcha_answer']) {
            return back()->withErrors(['captcha_answer' => 'Incorrect answer to the captcha question.'])->withInput();
        }

        try {
            $user = User::create([
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'jabber' => $validatedData['jabber'],
            ]);

            Mail::send('emails.thankyou', ['user' => $user], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Thank you for registering');
            });

            return redirect('/login')->with('success', 'Registration successful! Please login.');
        } catch (\Exception $e) {
            \Log::error('Registration error: ' . $e->getMessage());

            return back()->withErrors(['general' => 'Registration failed. Please try again later.'])->withInput();
        }
    }
}
