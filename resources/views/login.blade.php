@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="card p-4 shadow-lg rounded-4" style="width: 400px;">
            <div class="text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" alt="User Icon" width="80">
                <h3 class="mt-3 fw-bold">Welcome Back</h3>
                <p class="text-muted">Sign in to continue</p>
            </div>

            <!-- ✅ Show Messages -->
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control shadow-sm" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control shadow-sm" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 mt-2 fw-bold">Login</button>
            </form>
            
            <p class="text-center text-muted mt-3">Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p>
        </div>
    </div>
@endsection
