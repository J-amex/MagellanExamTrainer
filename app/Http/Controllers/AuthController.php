<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
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
    }

    public function logout()
    {
        session()->forget('logged_in');
        session()->forget('user_type');
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    public function dashboard()
    {
        if (!session('logged_in')) {
            return redirect()->route('login')->with('error', 'You must log in first.');
        }
        return view('dashboard');
    }
}
