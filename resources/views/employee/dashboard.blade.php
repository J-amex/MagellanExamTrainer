@extends('layouts.app')

@section('title', 'Employee Dashboard')

@section('content')
<div class="container-fluid p-4" style="background-color: rgba(0, 47, 75, 0.0); min-height: 100vh; color: white;">

    <!-- Logo Placeholder -->
    <div class="d-flex justify-content-between align-items-center mb-3">
    <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold" style="color: white;">Magellan Solutions Training</h2>
        <button class="btn btn-outline-light">Logout</button>
    </div>
    
    <div class="row">   
        <!-- Employee Profile Section -->
        <div class="col-lg-4">
            <div class="card p-4 shadow-lg rounded-4" style="background-color: #1B5A7A;">
                <div class="text-center mb-3">
                    <img src="{{ asset('images/profile.png') }}" alt="Profile" class="img-fluid rounded-circle" style="width: 100px;">
                </div>
                <h4 class="fw-bold text-center">Aron James Aguirre</h4>
                <p class="text-center">Campaign Department</p>
                <h5 class="fw-bold">Training Feedback</h5>
                <p>Data Privacy Exam: ⭐⭐⭐⭐☆</p>
                <p>Magellan Policies Exam: ⭐⭐⭐⭐☆</p>
                <p>Earthquake and Fire Safety: ⭐⭐⭐⭐⭐</p>
                <h4 class="fw-bold">Exam AVG: 4.6</h4>
            </div>
        </div>
        
        <!-- Training Sections -->
        <div class="col-lg-8">
            <!-- Pending Trainings -->
            <div class="card mb-3 p-3 shadow-lg rounded-4" style="background-color: #3A6F8F;">
                <h4 class="fw-bold">Pending Trainings:</h4>
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
                            <td><button class="btn btn-danger">Start Training</button></td>
                        </tr>
                        <tr>
                            <td>02/27/2025</td>
                            <td>12:00 AM</td>
                            <td>Magellan Policies Exam</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>20 mins</td>
                            <td><button class="btn btn-danger">Resume</button></td>
                        </tr>
                        <tr>
                            <td>03/02/2025</td>
                            <td>3:00 AM</td>
                            <td>Earthquake and Fire Safety</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td><button class="btn btn-danger">Retake</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Training History -->
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #3A6F8F;">
                <h4 class="fw-bold">Training History:</h4>
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
</div>
@endsection
