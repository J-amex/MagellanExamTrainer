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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $adminUsername = 'admin';
    $employeeUsername = 'employee';
    $validPassword = '123';

    if ($request->password === $validPassword) {
        if ($request->username === $adminUsername) {
            session(['logged_in' => true, 'user_type' => 'admin']);
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
        } elseif ($request->username === $employeeUsername) {
            session(['logged_in' => true, 'user_type' => 'employee']);
            return redirect()->route('employee.dashboard')->with('success', 'Welcome Employee!');
        }
    }

    return redirect()->route('login')->with('error', 'These credentials do not match our records.');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/employee/dashboard', function () {
    return view('employee.dashboard');
})->name('employee.dashboard');


Route::get('/dashboard', function () {
    if (!session('logged_in')) {
        return redirect()->route('login')->with('error', 'You must log in first.');
    }
    return view('dashboard');
})->name('dashboard');


Route::post('/logout', function () {
    session()->forget('logged_in');
    return redirect()->route('login')->with('success', 'Logged out successfully.');
})->name('logout');
