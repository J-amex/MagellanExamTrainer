@extends('layouts.app')

@section('title', 'Settings')

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
                <h4 class="fw-bold">Agent Settings</h4><p>Configure Agents</p>

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
                                
                                <th>Agent Name ⬍</th>
                                <th>Campaign ⬍</th>
                                <th>Department ⬍</th>
                                <th>Position ⬍</th>
                                <th>User Type ⬍</th>
                                <th>Activity Status ⬍</th>
                                <th>AVG ⬍</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody id="agentsTableBody">
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Wooooo Wooooo</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Weeeeee Wiiiiii</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>HHHHH HHHHHHHHH</td>
                                <td>ASDF camp</td>
                                <td>ZXCV dep</td>
                                <td>zzzzzzzz pos</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>
                            <tr>
                                <td>Aron James Aguirre</td>
                                <td>Kodak</td>
                                <td>BPE Compliance</td>
                                <td>QA</td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Admin</option>
                                        <option value="6/10">Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" style="width: 120px;">
                                        <option value="">Active</option>
                                        <option value="6/10">Inactive</option>
                                    </select>
                                </td>
                                <td>9.7</td>
                                <td><button class="btn" onclick="viewExam()"> 👁 </button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

               
               
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <p>Showing <span id="showingStart">1</span> to <span id="showingEnd">10</span> of <span id="totalEntries">1*</span> entries</p>
                        
                        <div id="paginationControls"></div>
                        
                        <div class="text-end mt-3">
                            
                            <button class="btn fw-bold text-white" style="background-color: #7C1414; border-radius: 10px;">Save Changes</button>
                        </div>
                    </div>

                    
                </div>

                

            </div>
        </div>
    </div>
</div>

@endsection
