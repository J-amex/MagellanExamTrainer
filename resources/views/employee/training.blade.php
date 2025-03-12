@extends('layouts.app')

@section('title', 'Training Session')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 1); min-height: 100vh; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold">Magellan Solutions Training</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light">Logout</button>
        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card p-4 shadow-lg rounded-4 d-flex align-items-center" style="background-color: #327A8E;">
                <div class="training-container d-flex justify-content-between align-items-center p-4">
                    <div class="training-content p-3 rounded-4" style="border: 4px solid #64B5CD; background-color: #2C5B6E; width: 80%;">
                        <img src="{{ asset('images/powerpoint-icon.png') }}" class="img-fluid w-100" alt="Training Slide">
                    </div>
                    <div class="training-controls d-flex flex-column gap-3">
                        <button class="btn btn-danger fw-bold py-2 px-4">Next</button>
                        <button class="btn btn-danger fw-bold py-2 px-4">Back</button>
                        <button class="btn btn-danger fw-bold py-2 px-4">Exit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
