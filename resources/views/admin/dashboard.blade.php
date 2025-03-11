@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
        <h1 style="color:aliceblue; ">Welcome to the Admin Dashboard</h1>
        <p style="color:aliceblue;" class="lead">You are now logged in!</p>

            <!-- Logout Form -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection
