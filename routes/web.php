<?php

// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Show the login form
Route::get('/login', function () {
    return view('login');
})->name('login');

// Handle login authentication
Route::post('/login', function (Request $request) {
    // Define hardcoded credentials
    $validUsername = 'admin';
    $validPassword = 'password123';

    // Check if the credentials match
    if ($request->username === $validUsername && $request->password === $validPassword) {
        // Store session data
        session(['logged_in' => true]);

        // Redirect to dashboard with success message
        return redirect()->route('dashboard')->with('success', 'Login successful!');
    }

    // Redirect back with an error message
    return redirect()->route('login')->with('error', 'Invalid credentials');
});

// Show the dashboard page (Only if logged in)
Route::get('/dashboard', function () {
    if (!session('logged_in')) {
        return redirect()->route('login')->with('error', 'You must log in first.');
    }
    return view('dashboard');
})->name('dashboard');

// Logout Route
Route::post('/logout', function () {
    session()->forget('logged_in');
    return redirect()->route('login')->with('success', 'Logged out successfully.');
})->name('logout');
