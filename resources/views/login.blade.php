
 @extends('layouts.app')

@section('title', 'Login')

@section('content')
 
 
    <div class="container-fluid min-vh-100 d-flex align-items-center"> 
    <div class="row w-100">
        <!-- logo image -->
        <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center pe-lg-5">
            <img src="{{ asset('images/magellan logo.png') }}" alt="Magellan Solutions Logo" class="img-fluid" style="max-width: 200px;">
            <div>
                <h1 class="fw-bold" style="font-size: 70px;color:#0DA1C6; margin-bottom: 0;">magellan</h1>
                <h1 class="fw-bold" style="font-size: 70px;color:black; margin-top: 0; margin-bottom:0;">solutions</h1>
                <p class="fst-italic" style="font-size: 30px; color:whitesmoke">See The Future Your Way</p>
            </div>
        </div>

        <div class="col-lg-5 d-flex align-items-center justify-content-center ps-lg-5 flex-column">
            <!-- Title Above the Card -->
            <h2 class="text-center fw-bold mb-1" style="color:white; font-size: 30px;">Magellan Solutions Training</h2>

            <!-- Sign-In Card -->
            <div class="card p-4 shadow-lg rounded-4 w-100" style="max-width: 600px; background-color: #515455;">
                <h3 class="text-center fw-bold pb-lg-2" style="color:white">Sign In</h3>
                
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="employee_code" class="form-label fw-semibold" style="color:white">Employee Code:</label>
                        <input type="text" id="employee_code" name="username" class="form-control" placeholder="Enter Employee Code" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold" style="color:white">Password:</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Passwords" required>
                            <button type="button" class="btn bg-white" id="togglePassword">
                                <img width="24" height="24" src="https://img.icons8.com/windows/32/visible--v1.png" alt="visible--v1"/>
                            </button> 
                        </div>
                    </div>
                    <button type="submit" class="btn w-100 py-2 mt-3 fw-bold" style="background-color: #740407; color:white;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Password Toggle Script -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            let passwordField = document.getElementById('password');
            passwordField.type = (passwordField.type === 'password') ? 'text' : 'password';
        });   
    </script>
@endsection


