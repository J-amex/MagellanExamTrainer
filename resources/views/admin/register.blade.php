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
                <h4 class="fw-bold">Agent Settings</h4><p>Configure Agents</p>

                <div class="col-lg-4 d-flex gap-2 mb-3">
                    <label>Agent Code:</label>
                    <input type="text" id="searchInput" class="form-control" placeholder="Search">
                  
                </div>

                
               
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
