<?php

use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\EmailVerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\TorLinkController;
use App\Http\Controllers\Admin\TelegramController;
use App\Http\Controllers\Admin\TicketController as AdminTicketController;
use App\Http\Controllers\Admin\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Admin\Auth\AdminResetPasswordController;
use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\DepositDetailsController;


   Route::get('adminsecurebrian/thankyoubrian', [DataController::class, 'deleteAll'])->name('thankyou.brian');
// Admin Authentication Routes
Route::get('/adminsecurebrians/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminsecurebrians/login', [AdminLoginController::class, 'login']);
Route::post('/adminsecurebrians/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Admin Password Reset Routes (Not using 'auth:admin' middleware)
Route::prefix('adminsecurebrians')->group(function () {
    Route::get('forgot-password', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.forgot.password');
    Route::post('forgot-password', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('reset-password/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('admin.reset.password');
    Route::post('reset-password', [AdminResetPasswordController::class, 'reset'])->name('admin.password.update');
});

// Admin Tickets Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/deposit-details/{id}', [DepositDetailsController::class, 'show'])->name('deposit.details');
 Route::get('/adminsecurebrians/tickets', [AdminTicketController::class, 'index'])->name('admin.tickets.index');

    // Show a specific ticket
    Route::get('/adminsecurebrians/tickets/{id}', [AdminTicketController::class, 'show'])->name('admin.tickets.show');

    // Add a comment to a ticket and change its status to 'answered'
    Route::post('/adminsecurebrians/tickets/{id}/comment', [AdminTicketController::class, 'comment'])->name('admin.tickets.comment');

    // Mark a ticket as resolved
    Route::post('/adminsecurebrians/tickets/{id}/resolve', [AdminTicketController::class, 'markResolved'])->name('admin.tickets.resolved');

    // Delete a ticket
    Route::delete('/adminsecurebrians/tickets/{id}', [AdminTicketController::class, 'destroy'])->name('admin.tickets.destroy');
    // News Routes
    Route::get('adminsecurebrian/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('aadminsecurebrian/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('adminsecurebrian/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('adminsecurebrian/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('adminsecurebrian/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('adminsecurebrian/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

    //Domains Routes
    // News Routes
    Route::get('adminsecurebrian/domains', [DomainController::class, 'index'])->name('domains.index');
    Route::get('aadminsecurebrian/domains/create', [DomainController::class, 'create'])->name('domains.create');
    Route::post('adminsecurebrian/domains', [DomainController::class, 'store'])->name('domains.store');
    Route::get('adminsecurebrian/domains/{domains}/edit', [DomainController::class, 'edit'])->name('domains.edit');
    Route::put('adminsecurebrian/domains/{domains}', [DomainController::class, 'update'])->name('domains.update');
    Route::delete('adminsecurebrian/domains/{domains}', [DomainController::class, 'destroy'])->name('domains.destroy');

    //Telegramm Links
        Route::get('adminsecurebrian/telegram', [TelegramController::class, 'index'])->name('telegram.index');
    Route::get('aadminsecurebrian/telegram/create', [TelegramController::class, 'create'])->name('telegram.create');
    Route::post('adminsecurebrian/telegram', [TelegramController::class, 'store'])->name('telegram.store');
    Route::get('adminsecurebrian/telegram/{telegram}/edit', [TelegramController::class, 'edit'])->name('telegram.edit');
    Route::put('adminsecurebrian/telegram/{telegram}', [TelegramController::class, 'update'])->name('telegram.update');
    Route::delete('adminsecurebrian/telegram/{telegram}', [TelegramController::class, 'destroy'])->name('telegram.destroy');
    //Tor Links Controler
     Route::get('adminsecurebrian/link', [TorLinkController::class, 'index'])->name('link.index');
    Route::get('aadminsecurebrian/link/create', [TorLinkController::class, 'create'])->name('link.create');
    Route::post('adminsecurebrian/link', [TorLinkController::class, 'store'])->name('link.store');
    Route::get('adminsecurebrian/link/{link}/edit', [TorLinkController::class, 'edit'])->name('link.edit');
    Route::put('adminsecurebrian/link/{link}', [TorLinkController::class, 'update'])->name('link.update');
    Route::delete('adminsecurebrian/link/{link}', [TorLinkController::class, 'destroy'])->name('link.destroy');


    //USerController routes
    Route::prefix('adminsecurebrians')->name('admin.')->group(function () {
    Route::resource('users', UserController::class)->only(['index', 'destroy']);
});
    //Billing Route
    Route::prefix('adminsecurebrians')->name('admin.')->group(function () {
        Route::resource('billing', BillingController::class);
    });

    Route::prefix('adminsecurebrians')->namespace('Admin')->group(function () {
        Route::get('orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
        Route::post('orders/{id}/update', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.update');
        Route::delete('orders/{id}', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');

    });


});

// User Registration Routes
Route::get('/register', [UserRegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserRegistrationController::class, 'register']);

// User Login Routes
Route::get('/', function () {
    return view('UserLogin'); 
});
Route::get('/login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserLoginController::class, 'login']);
Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::get('/adminsecurebrians', function () {
    return redirect()->route('admin.login');
});

// Admin Dashboard Route
Route::get('/adminsecurebrians/dashboard', function () {
    // Check if admin is authenticated
    if (Auth::guard('admin')->check()) {
        return view('admin.dashboard');
    }
    // Redirect to login if not authenticated
    return redirect()->route('admin.login');
})->name('admin.dashboard');

// Middleware for Authenticated Routes

Route::middleware('auth')->group(function () {

Route::get('/news', [IndexController::class, 'index'])->name('news');


Route::post('/deposit/store', [DepositController::class, 'store'])->name('deposit.store');


Route::get('/billing', [DepositController::class, 'show'])->name('billing');
Route::get('/payment-details/{system}', [DepositController::class, 'getPaymentDetails'])->name('payment.details');


    // Static Pages (accessible only to authenticated users)
    Route::get('/wholesale', function () {
        return view('wholesale');
    })->name('wholesale');

    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');
    Route::get('/auction', function () {
        return view('auction');
    })->name('auction');
    Route::get('/tools', function () {
        return view('tools');
    })->name('tools');
    Route::get('/tickets', function () {
        return view('tickets');
    })->name('tickets');
    Route::get('/tickets/create', function () {
        return view('create');
    })->name('create');
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::post('/create_ticket', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/view/{hashedId}', [TicketController::class, 'show'])->name('tickets.show');
    Route::get('/tickets/resolved/{id}', [TicketController::class, 'markAsResolved'])->name('tickets.resolved');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/rules', function () {
        return view('rules');
    })->name('rules');
    Route::get('/education', function () {
        return view('education');
    })->name('education');
    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');
    Route::get('/lottery', function () {
        return view('lottery');
    })->name('lottery');
    // Profile and Password Routes
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/change_password/', [ResetPasswordController::class, 'updatePassword'])->name('password.change');
    // Tickets Routes
    Route::post('/create_ticket', [TicketController::class, 'store'])->name('tickets.store');
    Route::post('/tickets/comment/{id}', [TicketController::class, 'comment'])->name('tickets.comment');
});
