@extends('layouts.app')

@section('title', 'Admin Create Exam')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold">Magellan Solutions Training</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light">Logout</button>
        </form>
    </div>

    <div class="row">
        
        <div class="col-lg-2 d-flex">
        @include('partials.navbar')
        </div>

        
        <div class="col-lg-9">
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E;">
                <h4 class="fw-bold">Create Exam</h4>
                <div class="px-2 w-100" style="max-height: 600px; min-height: 700px;">
                    
                </div>
            </div>

            

        
    </div>
</div>
@endsection
