@extends('layouts.app')

@section('title', 'Admin Create Exam')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold">Magellan Solutions Training Create Exam</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light">Logout</button>
        </form>
    </div>

    <div class="row">
        <!-- Sidebar Navigation -->
        <div class="col-lg-2 d-flex">
            <div class="card p-4 shadow-lg rounded-4 w-100 d-flex flex-column justify-content-between"
                 style="background-color: #110C3D; min-height: 700px; max-height: 800px;">
                <!-- Navigation Links -->
                <nav class="nav flex-column">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3" style="background-color: #146C94; border-radius: 10px;>
                        <i class="bi bi-pencil-square"></i> Create Exam
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
                        <i class="bi bi-people"></i> Agents
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
                        <i class="bi bi-archive"></i> Exam Archive
                    </a>
                </nav>

                <div class="mt-auto">
                    <hr class="bg-white">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
                        <i class="bi bi-gear"></i> Settings
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link text-white fw-bold p-3 border-0 bg-transparent">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E;">
                <h4 class="fw-bold">Create Exam</h4>
                <div class="px-2 w-100" style="max-height: 600px; min-height: 700px;">
                    
                </div>
            </div>

            

        
    </div>
</div>
@endsection
