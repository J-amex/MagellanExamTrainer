@extends('layouts.app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 0); min-height: 100vh; color: white;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card p-4 shadow-lg rounded-4 d-flex align-items-center" style="background-color: #327A8E; width: 100%;">
                <div class="exam-container w-100 d-flex flex-column align-items-center">

                    <!-- Timer & Question Counter -->
                    <div class="d-flex justify-content-between w-100 p-3">
                        <div class="fw-bold">Timer: <span id="timer">20:00</span></div>
                        <div class="fw-bold">Question <span id="question-number">1</span> out of <span id="total-questions"></span></div>
                    </div>

                    <!-- Question Box -->
                    <div class="question-box p-4 rounded-4 mb-3" style="background-color: #E3F2FD; width: 100%; max-width: 1000px; min-height: 600px;">
                        <div class="question-div active" id="question-1">
                            <p class="fw-bold">Question 1: Lorem Ipsum is simply dummy text of the printing industry...</p>
                            <input type="radio" name="q1" value="A"> Choice A <br>
                            <input type="radio" name="q1" value="B"> Choice B <br>
                            <input type="radio" name="q1" value="C"> Choice C <br>
                            <input type="radio" name="q1" value="D"> Choice D <br>
                        </div>

                        <div class="question-div d-none" id="question-2">
                            <p class="fw-bold">Question 2: Another question appears here...</p>
                            <input type="radio" name="q2" value="A"> Choice A <br>
                            <input type="radio" name="q2" value="B"> Choice B <br>
                            <input type="radio" name="q2" value="C"> Choice C <br>
                            <input type="radio" name="q2" value="D"> Choice D <br>
                        </div>

                        <div class="question-div d-none" id="question-3">
                            <p class="fw-bold">Question 3: Another sample question...</p>
                            <input type="radio" name="q3" value="A"> Choice A <br>
                            <input type="radio" name="q3" value="B"> Choice B <br>
                            <input type="radio" name="q3" value="C"> Choice C <br>
                            <input type="radio" name="q3" value="D"> Choice D <br>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="d-flex justify-content-between w-100 p-3">
                        <button class="btn btn-secondary fw-bold px-4" id="prev-btn" disabled>Previous</button>
                        <button class="btn btn-danger fw-bold px-4" id="next-btn">Next</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
