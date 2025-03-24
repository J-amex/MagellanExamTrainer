@extends('layouts.app')

@section('title', 'Exam Archive')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="d-flex justify-content-between align-items-center mb-3">
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

       
        <div class="col-lg-10">
            <div class="card shadow-lg rounded-4 p-4" style="background-color: #327A8E; min-height:750px; max-height:750px;">
                <h4 class="fw-bold">Agents</h4><p>List of agents taking the exam</p>

                <div class="col-lg-7 d-flex gap-2 mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search">
                    <select class="form-control">
                        <option>Select Examiner</option>
                    </select>
                    <select class="form-control">
                        <option>Select Exam Title</option>
                    </select>
                </div>

                
                <div class="table-responsive">
                    <table id="agentsTable" class="table table-primary table-striped text-white">
                    
                        <thead style="position: sticky; top: 0; z-index: 2;" class="table-dark">
                            <tr class="fw-bold">
                               
                                <th>Exam Title ⬍</th>
                                <th>Examiner ⬍</th>
                                <th>Time Limit ⬍</th>
                                <th>Times Taken⬍</th>
                                <th>Failed Percentage</th>
                                <th>Ratings AVG ⬍</th>
                                <th>Survey Results ⬍</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody id="agentsTableBody">
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                              
                                <td>Data Privacy Exam</td>
                                <td>Jane Coopyer</td>
                                <td>20 mins</td>
                                <td>98</td>
                                <td>20%</td>
                                <td>5.4</td>
                                <td>3.4 out of 5</td>
                                <td>
                                    <button class="btn btn-sm" onclick="viewExam()">
                                        <img src="{{ asset('images/icn editBlack.png') }}" alt="edit" width="20" height="20">
                                    </button>
                                </td>
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
