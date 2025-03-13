@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold">Magellan Solutions Admin Panel</h2>
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
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3" style="background-color: #146C94; border-radius: 10px;">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
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
        <div class="col-lg-7">
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E;">
                <h4 class="fw-bold">Pending Trainings:</h4>
                <div class="px-2" style="overflow-y: auto; max-height: 350px; min-height: 350px;">
                    <table class="table table-primary table-striped text-white">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time Given</th>
                                <th>Training Category</th>
                                <th>Examiner</th>
                                <th>Time Limit</th>
                                <th>Scores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/25/2025</td>
                                <td>10:00 AM</td>
                                <td>Data Privacy Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>15 mins</td>
                                <td>
                                    <a href="{{ route('employee.training', ['category' => 'Data Privacy Exam']) }}" class="btn btn-success w-100 fw-bold py-1">
                                        Start Training
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>12:00 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>20 mins</td>
                                <td><button class="btn btn-warning w-100 fw-bold py-1">Resume</button></td>
                            </tr>
                            <tr>
                                <td>03/02/2025</td>
                                <td>3:00 AM</td>
                                <td>Earthquake and Fire Safety</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>15 mins</td>
                                <td><button class="btn w-100 fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card p-3 shadow-lg rounded-4 mt-4" style="background-color: #327A8E;">
                <h4 class="fw-bold">Training History:</h4>
                <div class="px-2" style="overflow-y: auto; max-height: 250px;">
                    <table class="table table-primary table-striped text-white">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time Finished</th>
                                <th>Exam Title</th>
                                <th>Examiner</th>
                                <th>Total Time</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/25/2025</td>
                                <td>10:36 AM</td>
                                <td>Data Privacy Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:16</td>
                                <td>80/100</td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td>95/100</td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td class="text-danger">40/100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Additional Card (Blank) -->
        <div class="col-lg-3">
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E; height: 100%;">
                <h4 class="fw-bold">Wala pa dito</h4>
            </div>
        </div>
    </div>
</div>
@endsection
