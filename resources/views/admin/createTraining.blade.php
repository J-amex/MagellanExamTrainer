@extends('layouts.app')

@section('title', 'Create Training')

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

        <div class="col-lg-10">
            <div class="card p-4 rounded-4 shadow-lg" style="background-color: #B8D8E0; max-height: 750px; min-height: 750px;">
                <div class="row">
                    
                    <div class="col-md-6">
                        <label class="fw-bold">Exam Title:</label>
                        <input type="text" class="form-control mb-2">

                        <label class="fw-bold">Date:</label>
                        <input type="date" class="form-control mb-2">

                        <label class="fw-bold">Time Limit:</label>
                        <select class="form-control mb-2">
                            <option>10 mins</option>
                            <option>20 mins</option>
                            <option>30 mins</option>
                        </select>

                        <label class="fw-bold">Upload Material:</label>
                        <input type="file" class="form-control mb-3">
                    </div>

                    
                    <div class="col-md-6">
                        <div class="card p-3 rounded-4 shadow-lg" style="background-color: #08354A; color: white; max-height: 750px; overflow-y: auto;">
                            <div id="questions-container">
                                
                                <div class="mb-3 question-item">
                                    <h5 class="fw-bold">Question 1:</h5>
                                    <textarea class="form-control mb-2" placeholder="Type question here.."></textarea>

                                    <label>Choice 1:</label>
                                    <input type="text" class="form-control mb-2">
                                    
                                    <label>Choice 2:</label>
                                    <input type="text" class="form-control mb-2">
                                    
                                    <label>Choice 3:</label>
                                    <input type="text" class="form-control mb-2">
                                    
                                    <label>Choice 4:</label>
                                    <input type="text" class="form-control mb-2">

                                    <label class="fw-bold">Select Correct Answer:</label>
                                    <select class="form-control mb-2">
                                        <option>Choice 1</option>
                                        <option>Choice 2</option>
                                        <option>Choice 3</option>
                                        <option>Choice 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="text-end mt-3">
                    <button class="btn btn-lg text-white fw-bold" style="background-color: #7C1414; border-radius: 10px;">Create Exam</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
