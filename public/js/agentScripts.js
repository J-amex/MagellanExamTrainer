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

document.getElementById("exportBtn").addEventListener("click", function () {
    let table = document.getElementById("agentsTable");
    let rows = Array.from(document.querySelectorAll("#agentsTableBody tr"));
    let data = [];

    let headers = Array.from(table.querySelectorAll("thead th"))
        .slice(0, -1) 
        .map(th => th.textContent.replace("⬍", "").trim()); 

    data.push(headers);

    rows.forEach(row => {
        let rowData = Array.from(row.querySelectorAll("td"))
            .slice(0, -1) 
            .map(td => td.textContent.trim());
        data.push(rowData);
    });

    let ws = XLSX.utils.aoa_to_sheet(data);
    let wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Exam Results");

    
    XLSX.writeFile(wb, "exam_results.xlsx");


    
});



