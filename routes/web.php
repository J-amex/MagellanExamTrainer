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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ButtonControllers;
use App\Http\Controllers\ExamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/employee/training', [ButtonControllers::class, 'startTraining'])->name('employee.training');
Route::post('/exam/next', [ExamController::class, 'nextQuestion'])->name('exam.next');


//admin routes
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/createExam', function () {
    return view('admin.createExam');
})->name('admin.createExam');

Route::get('/admin/agents', function () {
    return view('admin.agents');
})->name('admin.agents');

Route::get('/admin/examArchive', function () {
    return view('admin.examArchive');
})->name('admin.examArchive');

Route::get('/admin/giveExam', function () {
    return view('admin.giveExam');
})->name('admin.giveExam');

Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('admin.settings');

//employee routes
Route::get('/employee/dashboard', function () {
    return view('employee.dashboard');
})->name('employee.dashboard');

Route::get('/employee/training', function () {
    return view('employee.training');
})->name('employee.training');

Route::get('/employee/exam', function () {
    return view('employee.exam');
})->name('employee.exam');

//extra wtf
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
