<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Normal user dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

// Logged in user route
Route::middleware('auth')->group(function () {
    Route::get('/ldashboard', [UserController::class, 'ldashboard'])->name('user.ldashboard');
});

// Admin dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Member resource routes
    Route::resource('members', MemberController::class);

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__ . '/auth.php';

// Show members route
Route::get('/showMembers', [MemberController::class, 'front']);

// Admin route
Route::get('/admin', function() {
    return "You're an admin";
});

// Send email route
Route::get('/send-email', function () {
    try {
        Mail::to('isleycharlesmucai@gmail.com')->send(new MyEmail());
        return "Email sent successfully!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

//admin login route
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);


// Admin authenticated routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Settings routes
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/settings/update-profile', [SettingsController::class, 'updateProfile'])->name('settings.updateProfile');
    Route::put('/settings/update-password', [SettingsController::class, 'updatePassword'])->name('settings.updatePassword');
    Route::delete('/settings/delete-profile', [SettingsController::class, 'deleteProfile'])->name('settings.deleteProfile');
});

// Blog resource routes
Route::resource('blogs', BlogController::class);

// Redirect route based on user role
Route::get('/redirect', function () {
    if (Auth::check()) {
        return Auth::user()->is_admin ? redirect()->route('admin.dashboard') : redirect()->route('user.dashboard');
    }
    return redirect('/'); // Guests stay on the main blog page
})->name('redirect');

// User dashboard route with blogs
Route::get('/dashboard', function () {
    $blogs = App\Models\Blog::latest()->paginate(6);
    return view('users.users', compact('blogs'));
})->name('user.dashboard');

// Rotes for the events
Route::resource('events', EventController::class);

// Admin routes for events
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('events', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
});

// New routes for events, resources, and about
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Routes for the resources
Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');

// Feedback route
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');







