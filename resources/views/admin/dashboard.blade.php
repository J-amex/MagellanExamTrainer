@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 70px;">
        <h2 class="fw-bold">Magellan Solutions Short Training</h2>
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
            <div class="card p-3 rounded-4 shadow-lg" style="background-color: #327A8E; min-height: 0;">
                <h4 class="fw-bold">Pending Trainings:</h4>
                <div class="flex-grow-1 overflow-auto px-2">
                    <table class="table table-primary table-striped text-white">
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
                            <tr>
                                <th>Date</th>
                                <th>Time Given</th>
                                <th>Training Title</th>
                                <th>Examiner</th>
                                <th>Time Limit</th>
                                <th>Status</th>
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

            <div class="card p-3 rounded-4 shadow-lg mt-4" style="background-color: #327A8E; min-height: 0;">
                <h4 class="fw-bold">Training History:</h4>
                <div class="flex-grow-1 overflow-auto px-2">
                    <table class="table table-primary table-striped text-white">
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
                            <tr>
                                <th>Date</th>
                                <th>Time Finished</th>
                                <th>Training Title</th>
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

       
        <div class="col-lg-3">
            <div class="card p-3 rounded-4 shadow-lg" style="background-color: #327A8E; min-height:750px; max-height: 750px;">
                <h4 class="fw-bold">Training Results Overview</h4>
                <div class="mb-3">
                <label for="examSelect" class="form-label fw-bold">Select Training Title:</label>
                <select id="examSelect" class="form-select form-select-sm w-auto">
                    <option value="exam1">Data Privacy Training</option>
                    <option value="exam2">Cyber Security Training</option>
                    <option value="exam3">BPE Compliance Test</option>
                    <option value="exam4">Earthquake and Fire Safety</option>
                </select>
            </div>
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('myPieChart').getContext('2d');

    
        const examData = {
            exam1: [45, 20, 10], 
            exam2: [30, 35, 5],  
            exam3: [50, 10, 15],
            exam4: [30, 10, 15]   
        };

        let pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Passed', 'Failed', 'Pending'],
                datasets: [{
                    data: examData['exam1'], 
                    backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                    borderColor: '#000000', 
                    borderWidth: 0.8 
                }]
            },
            options: {
                plugins: {
                    legend: {
                        labels: { color: 'white' }
                    }
                    
                }
            }
        });

        
        document.getElementById('examSelect').addEventListener('change', function () {
            let selectedExam = this.value;
            pieChart.data.datasets[0].data = examData[selectedExam]; 
            pieChart.update();
        });
    });
</script>
@endsection
