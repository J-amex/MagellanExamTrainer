// document.addEventListener("DOMContentLoaded", function () {
//     let currentQuestion = 1;
//     const questions = document.querySelectorAll(".question-div");
//     const totalQuestions = questions.length; // Automatically detect total questions
//     const nextButton = document.getElementById("next-btn");

//     nextButton.addEventListener("click", function () {
//         // Hide current question
//         document.getElementById(`question-${currentQuestion}`).classList.add("d-none");

//         // Move to the next question
//         currentQuestion++;

//         if (currentQuestion <= totalQuestions) {
//             document.getElementById(`question-${currentQuestion}`).classList.remove("d-none");
//         } else {
//             alert("Exam Finished!");
//             // Redirect to exam completion page
//             window.location.href = "/employee/dashboard";
//         }
//     });
// });
document.addEventListener("DOMContentLoaded", function () {
    let currentQuestion = 1;
    const questions = document.querySelectorAll(".question-div");
    const totalQuestions = questions.length;

    const nextButton = document.getElementById("next-btn");
    const prevButton = document.getElementById("prev-btn");

    function updateButtons() {
        // Disable "Previous" on first question
        prevButton.disabled = (currentQuestion === 1);
        // Change "Next" button to "Finish" on the last question
        nextButton.innerText = (currentQuestion === totalQuestions) ? "Finish" : "Next";
    }

    nextButton.addEventListener("click", function () {
        if (currentQuestion < totalQuestions) {
            document.getElementById(`question-${currentQuestion}`).classList.add("d-none");
            currentQuestion++;
            document.getElementById(`question-${currentQuestion}`).classList.remove("d-none");
        } else {
            alert("Exam Finished!");
            window.location.href = "/employee/dashboard";
        }
        updateButtons();
    });

    prevButton.addEventListener("click", function () {
        if (currentQuestion > 1) {
            document.getElementById(`question-${currentQuestion}`).classList.add("d-none");
            currentQuestion--;
            document.getElementById(`question-${currentQuestion}`).classList.remove("d-none");
        }
        updateButtons();
    });

    updateButtons(); // Call initially to set button states
});
