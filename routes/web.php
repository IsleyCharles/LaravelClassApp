<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\SettingsController;
use App\Mail\MyEmail;
use App\Http\Controllers\BlogController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('members', MemberController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/showMembers', [MemberController::class, 'front']);
Route::get('/admin', function() {
    return "You're an admin";
});

Route::get('/send-email', function () {
    try {
        Mail::to('isleycharlesmucai@gmail.com')->send(new MyEmail());
        return "Email sent successfully!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/settings/update-profile', [SettingsController::class, 'updateProfile'])->name('settings.updateProfile');
    Route::put('/settings/update-password', [SettingsController::class, 'updatePassword'])->name('settings.updatePassword');
    Route::delete('/settings/delete-profile', [SettingsController::class, 'deleteProfile'])->name('settings.deleteProfile');
});

Route::resource('blogs', BlogController::class);







