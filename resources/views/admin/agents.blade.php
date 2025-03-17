@extends('layouts.app')

@section('title', 'Agents')

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

       
        <div class="col-lg-10">
            <div class="card shadow-lg rounded-4 p-4" style="background-color: #327A8E; min-height:750px; max-height:750px;">
                <h4 class="fw-bold">Agents</h4><p>List of agents taking the exam</p>

                <div class="col-lg-7 d-flex gap-2 mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search">
                    <select class="form-control">
                        <option>Select Campaign</option>
                    </select>
                    <select class="form-control">
                        <option>Select Department</option>
                    </select>
                    <select class="form-control">
                        <option>Select Exam Title</option>
                    </select>
                    <input type="date" id="dateFilter" class="form-control">
                </div>

                
                <div class="table-responsive">
                    <table id="agentsTable" class="table table-primary table-striped text-white">
                    
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
                            <tr class="fw-bold">
                                <th>Exam Date ⬍</th>
                                <th>Agent Name ⬍</th>
                                <th>Campaign ⬍</th>
                                <th>Department ⬍</th>
                                <th>Exam Title ⬍</th>
                                <th>Scores</th>
                                <th>Status ⬍</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody id="agentsTableBody">
                            <tr>
                                <td>03-17-2025</td>
                                <td>Jane Cooper</td>
                                <td>Kodak</td>
                                <td>IT NOC</td>
                                <td>Data Privacy Exam</td>
                                <td>6/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Floyd Miles</td>
                                <td>Kodak</td>
                                <td>IT NOC</td>
                                <td>Data Privacy Exam</td>
                                <td>9/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Ronald Richards</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Ronald Richards</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Ronald Richards</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Ronald Richards</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Ronald Richards</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Test ASDF</td>
                                <td>Artemis</td>
                                <td>Sales</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Test ASDF</td>
                                <td>Artemis</td>
                                <td>Sales</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Test ASDF</td>
                                <td>Artemis</td>
                                <td>Sales</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>03-17-2025</td>
                                <td>Test ASDF</td>
                                <td>Artemis</td>
                                <td>Sales</td>
                                <td>Data Privacy Exam</td>
                                <td>7/10</td>
                                <td>Passed</td>
                                <td><button class="btn btn-sm" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

               
               
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <p>Showing <span id="showingStart">1</span> to <span id="showingEnd">10</span> of <span id="totalEntries">1*</span> entries</p>
                        
                        <div id="paginationControls"></div>
                        
                        <div class="text-end mt-3">
                            <button id="exportBtn"class="btn btn-outline-light">⬇ Export</button>
                            <button class="btn fw-bold text-white" style="background-color: #7C1414; border-radius: 10px;">Give Exam</button>
                        </div>
                    </div>

                    
                </div>

                

            </div>
        </div>
    </div>
</div>

@endsection
