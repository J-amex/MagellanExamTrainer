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
                    <table class="table table-primary table-striped text-white">
                    
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
                            <button class="btn btn-outline-dark">⬇ Export</button>
                            <button class="btn fw-bold text-white" style="background-color: #7C1414; border-radius: 10px;">Give Exam</button>
                        </div>
                    </div>

                    
                </div>

                

            </div>
        </div>
    </div>
</div>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    let tableRows = Array.from(document.querySelectorAll("#agentsTableBody tr")); 

    document.getElementById("searchInput").addEventListener("keyup", function () {
        filterTable();
    });

    document.getElementById("dateFilter").addEventListener("change", function () {
        filterTable();
    });

    function filterTable() {
        let searchValue = document.getElementById("searchInput").value.toLowerCase();
        let selectedDate = document.getElementById("dateFilter").value;

        let formattedDate = selectedDate ? selectedDate.split("-").slice(1).join("-") + "-" + selectedDate.split("-")[0] : "";

        tableRows.forEach(row => {
            let textContent = row.textContent.toLowerCase();
            let examDate = row.cells[0].textContent.trim(); 

            let matchesSearch = textContent.includes(searchValue) || searchValue === "";
            let matchesDate = examDate === formattedDate || formattedDate === "";

            
            row.style.display = matchesSearch && matchesDate ? "table-row" : "none";
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let tableRows = Array.from(document.querySelectorAll("#agentsTableBody tr")); 
    let rowsPerPage = 10;
    let currentPage = 1;

    function showPage(page) {
        let start = (page - 1) * rowsPerPage;
        let end = start + rowsPerPage;

        tableRows.forEach((row, index) => {
            row.style.display = index >= start && index < end ? "table-row" : "none";
        });

        updatePaginationControls();
    }

    function updatePaginationControls() {
        let totalPages = Math.ceil(tableRows.length / rowsPerPage);
        let paginationContainer = document.getElementById("paginationControls");

        paginationContainer.innerHTML = `
            <button class="btn btn-outline-dark" ${currentPage === 1 ? "disabled" : ""} onclick="changePage(currentPage - 1)">&lt;</button>
        `;

        for (let i = 1; i <= totalPages; i++) {
            paginationContainer.innerHTML += `
                <button class="btn ${i === currentPage ? "btn-dark" : "btn-outline-dark"}" onclick="changePage(${i})">${i}</button>
            `;
        }

        paginationContainer.innerHTML += `
            <button class="btn btn-outline-dark" ${currentPage === totalPages ? "disabled" : ""} onclick="changePage(currentPage + 1)">&gt;</button>
        `;
    }

    window.changePage = function (page) {
        if (page >= 1 && page <= Math.ceil(tableRows.length / rowsPerPage)) {
            currentPage = page;
            showPage(currentPage);
        }
    };

   
    showPage(1);
});
</script>

@endsection
