@extends('layouts.app')

@section('title', 'Register')

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
                <h4 class="fw-bold">Register Employees</h4>
                <p>Reguster Employees for Short Training Manually</p>

                <div class="container mt-4">
    <div class="card shadow-lg rounded-4 p-3 text-black" style="background-color: #B8D8E0;">
        <h4 class="fw-bold">Register Employee</h4>
        <p>Fill in the details to register a new employee.</p>
        <form>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Employee Code</label>
                    <input type="text" class="form-control" placeholder="Enter Employee Code">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter First Name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Enter Middle Name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Campaign</label>
                    <input type="text" class="form-control" placeholder="Enter Campaign">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Department</label>
                    <input type="text" class="form-control" placeholder="Enter Department">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Position</label>
                    <input type="text" class="form-control" placeholder="Enter Position">
                </div>
                <div class="col-md-6">
                    <label class="form-label">User Type</label>
                    <select class="form-select">
                        <option value="Admin">Admin</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Activity Status</label>
                    <select class="form-select">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary" style="background-color: #7C1414">Register</button>
                <input type="file" id="excelFile" accept=".xls,.xlsx" class="form-control mb-3" hidden>
                <button id="uploadBtn" class="btn btn-primary" style="background-color: #7C1414">Batch Register</button>
            </div>
        </form>
    </div>
</div>


            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("uploadBtn").addEventListener("click", function() {
        document.getElementById("excelFile").click();
    });
</script>
@endsection
