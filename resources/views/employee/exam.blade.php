@extends('layouts.app')

@section('title', 'Exam')

@section('content')
<div class="container-fluid p-3" style="background-color: rgba(0, 47, 75, 1); min-height: 100vh; color: white;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card p-4 shadow-lg rounded-4 d-flex align-items-center" style="background-color: #327A8E;">
                <div class="exam-container w-100">

                    <!-- Questions List -->
                    <div class="question-div active" id="question-1">
                        <p>Question 1: Lorem Ipsum is simply dummy text of the printing industry...</p>
                        <input type="radio" name="q1" value="A"> Choice A <br>
                        <input type="radio" name="q1" value="B"> Choice B <br>
                        <input type="radio" name="q1" value="C"> Choice C <br>
                        <input type="radio" name="q1" value="D"> Choice D <br>
                    </div>

                    <div class="question-div d-none" id="question-2">
                        <p>Question 2: Another question appears here...</p>
                        <input type="radio" name="q2" value="A"> Choice A <br>
                        <input type="radio" name="q2" value="B"> Choice B <br>
                        <input type="radio" name="q2" value="C"> Choice C <br>
                        <input type="radio" name="q2" value="D"> Choice D <br>
                    </div>

                    <div class="question-div d-none" id="question-3">
                        <p>Question 3: Another sample question...</p>
                        <input type="radio" name="q3" value="A"> Choice A <br>
                        <input type="radio" name="q3" value="B"> Choice B <br>
                        <input type="radio" name="q3" value="C"> Choice C <br>
                        <input type="radio" name="q3" value="D"> Choice D <br>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-danger fw-bold" id="next-btn">Next</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
