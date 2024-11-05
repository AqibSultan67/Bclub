<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CaptchaImage;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        $captcha = CaptchaImage::inRandomOrder()->first();

        if (!$captcha) {
            // Log an error or debug information
            \Log::error('No captcha found in the database.');
            return view('UserLogin')->withErrors('No captcha found. Please contact support.');
        }

        session(['captcha' => $captcha]);
        return view('UserLogin', compact('captcha'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|max:32',
            'password' => 'required|max:64',
            'captcha_image_id' => 'required|exists:captcha_images,id',
            'captcha_answer' => 'required',
        ]);

        // Validate captcha
        $captchaImage = CaptchaImage::find($request->input('captcha_image_id'));

        if (!$captchaImage) {
            \Log::error('Captcha image not found for ID: ' . $request->input('captcha_image_id'));
            return back()
                ->withErrors(['captcha_answer' => 'Invalid captcha answer.'])
                ->withInput($request->except('captcha_answer'));
        }

        if ($captchaImage->answer !== $request->input('captcha_answer')) {
            // Generate a new captcha
            $newCaptcha = CaptchaImage::inRandomOrder()->first();
            session(['captcha' => $newCaptcha]);
            return back()
                ->withErrors(['captcha_answer' => 'Invalid captcha answer.'])
                ->withInput($request->except('captcha_answer'));
        }

        // Attempt to log the user in
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('news')->with('success', 'Login successful!');
        }

        // Generate a new captcha if login fails
        $newCaptcha = CaptchaImage::inRandomOrder()->first();
        session(['captcha' => $newCaptcha]);
        return back()
            ->withErrors(['credentials' => 'Invalid username or password.'])
            ->withInput($request->except('password', 'captcha_answer'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
