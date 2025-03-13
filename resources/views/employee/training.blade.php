@extends('layouts.app')

@section('title', 'Training Session')

@section('content')

<!-- ALISIN SA views/employee , pag may backend na. pang any users tong training.php (dont forget to fix routes) -->

<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
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
                    <div class="training-content p-3 rounded-4" style="border: 4px solid #64B5CD; background-color: #2C5B6E; width: 100%;">
                    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSBj-Mwhwd1d4C6LPBTqj--7FdJN5HBnqiAOnzFXueWgWnTtcjCT8dUZcRuf588DTJv62WZGn4qyNV2/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

                    </div>
                    <div class="training-controls d-flex flex-column gap-4 px-5 w-100">
                    <a href="{{ route('employee.exam', ['category' => 'Data Privacy Exam']) }}" 
                     class="btn fw-bold py-1 px-5" style="background-color: #740407; color:white;">Proceed to Exam</a>
                        <a href="{{ route('employee.dashboard') }}" class="btn fw-bold py-1 px-5" style="background-color: #740407; color:white;">
                            Exit
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
