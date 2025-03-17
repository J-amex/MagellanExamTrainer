@extends('layouts.app')

@section('title', 'Admin Dashboard')

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

       
        <div class="col-lg-7 d-flex flex-column gap-3" style="min-height: 750px; max-height: 750px;">
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E; min-height: 0;">
                <h4 class="fw-bold">Pending Trainings:</h4>
                <div class="px-2 flex-grow-1 overflow-auto">
                    <table class="table table-primary table-striped text-white">
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
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
                            <tr>
                                <td>03/02/2025</td>
                                <td>3:00 AM</td>
                                <td>Earthquake and Fire Safety</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>15 mins</td>
                                <td><button class="btn w-100 fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                            </tr>
                            <tr>
                                <td>03/02/2025</td>
                                <td>3:00 AM</td>
                                <td>Earthquake and Fire Safety</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>15 mins</td>
                                <td><button class="btn w-100 fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                            </tr>
                            <tr>
                                <td>03/02/2025</td>
                                <td>3:00 AM</td>
                                <td>Earthquake and Fire Safety</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>15 mins</td>
                                <td><button class="btn w-100 fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
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

            <div class="card p-3 shadow-lg rounded-4 mt-4" style="background-color: #327A8E; min-height: 0;">
                <h4 class="fw-bold">Training History:</h4>
                <div class="px-2 flex-grow-1 overflow-auto">
                    <table class="table table-primary table-striped text-white">
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
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
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td class="text-danger">40/100</td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td class="text-danger">40/100</td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td class="text-danger">40/100</td>
                            </tr>
                            <tr>
                                <td>02/27/2025</td>
                                <td>10:36 AM</td>
                                <td>Magellan Policies Exam</td>
                                <td>Asdf Ghjk Lmnop</td>
                                <td>00:19</td>
                                <td class="text-danger">40/100</td>
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
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E; min-height:750px; max-height: 750px;">
                <h4 class="fw-bold">Wala pa dito</h4>
            </div>
        </div>
    </div>
</div>
@endsection
