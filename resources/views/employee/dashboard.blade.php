@extends('layouts.app')

@section('title', 'Employee Dashboard')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0.0); min-height: 100vh; color: white;">

    
    <div class="d-flex justify-content-between align-items-center mb-3">
    <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold" style="color: white;">Magellan Solutions Training</h2>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light" >Logout</button>
            </form>

    </div>
    
    <div class="row">   
        
                <div class="col-lg-3 d-flex">
                <div class="card p-4 shadow-lg rounded-4 w-100 mx-4 d-flex flex-column justify-content-between" 
                style="background-color: #327A8E; min-height: 700px; max-height: 800px;">
                
                
                <div class="text-center mb-1">
                    <img src="{{ asset('images/profile.png') }}" alt="Profile" 
                        class="img-fluid rounded-circle" style="width: 200px;">
                </div>

                
                <div class="text-center">
                    <h4 class="fw-bold">Aron James Aguirre</h4>
                    <p class="mb-1">Campaign</p>
                    <p class="mb-3">Department</p>
                </div>

                
                <div>
                    <h5 class="fw-bold">Training Feedback:</h5>
                    <p class="mb-1">Data Privacy Exam: ⭐⭐⭐⭐☆</p>
                    <p class="mb-1">Magellan Policies Exam: ⭐⭐⭐⭐☆</p>
                    <p class="mb-3">Earthquake and Fire Safety: ⭐⭐⭐⭐⭐</p>
                </div>

               
                <div class="text-center mt-4">
                    <h4 class="fw-bold">Exam AVG: 4.6</h4>
                </div>
            </div>
        </div>

      
        <div class="col-lg-9">
          
            <div class="card mb-3 p-3 shadow-lg rounded-4" style="background-color: #327A8E;">
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
                                <a href="{{ route('employee.training', ['category' => 'Data Privacy Exam']) }}" 
                                class="btn btn-success w-100 text-center fw-bold py-1">
                                    Start Training
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>02/25/2025</td>
                            <td>10:00 AM</td>
                            <td>Data Privacy Exam</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td>
                                <a href="{{ route('employee.training', ['category' => 'Data Privacy Exam']) }}" 
                                class="btn btn-success w-100 text-center fw-bold py-1">
                                    Start Training
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>02/25/2025</td>
                            <td>10:00 AM</td>
                            <td>Data Privacy Exam</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td>
                                <a href="{{ route('employee.training', ['category' => 'Data Privacy Exam']) }}" 
                                class="btn btn-success w-100 text-center fw-bold py-1">
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
                            <td><button class="btn btn-warning w-100 text-center fw-bold py-1">Resume</button></td>
                        </tr>
                        <tr>
                            <td>03/02/2025</td>
                            <td>3:00 AM</td>
                            <td>Earthquake and Fire Safety</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td><button class="btn w-100 text-center fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                        </tr>
                        <tr>
                            <td>03/02/2025</td>
                            <td>3:00 AM</td>
                            <td>Earthquake and Fire Safety</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td><button class="btn w-100 text-center fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                        </tr>
                        <tr>
                            <td>03/02/2025</td>
                            <td>3:00 AM</td>
                            <td>Earthquake and Fire Safety</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td><button class="btn w-100 text-center fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                        </tr>
                        <tr>
                            <td>03/02/2025</td>
                            <td>3:00 AM</td>
                            <td>Earthquake and Fire Safety</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>15 mins</td>
                            <td><button class="btn w-100 text-center fw-bold py-1" style="background-color: #740407; color:white;">Retake</button></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

       
            <div class="card p-3 shadow-lg rounded-4" style="background-color: #327A8E;">
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
                            <td>02/25/2025</td>
                            <td>10:36 AM</td>
                            <td>Data Privacy Exam</td>
                            <td>Asdf Ghjk Lmnop</td>
                            <td>00:16</td>
                            <td>80/100</td>
                        </tr>
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
                            <td class="text-danger">20/100</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
