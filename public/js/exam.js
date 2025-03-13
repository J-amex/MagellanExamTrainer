document.addEventListener("DOMContentLoaded", function () {
    let currentQuestion = 1;
    const questions = document.querySelectorAll(".question-div");
    const totalQuestions = questions.length; // Automatically detect total questions
    const nextButton = document.getElementById("next-btn");

    nextButton.addEventListener("click", function () {
        // Hide current question
        document.getElementById(`question-${currentQuestion}`).classList.add("d-none");

        // Move to the next question
        currentQuestion++;

        if (currentQuestion <= totalQuestions) {
            document.getElementById(`question-${currentQuestion}`).classList.remove("d-none");
        } else {
            alert("Exam Finished!");
            // Redirect to exam completion page
            window.location.href = "/employee/dashboard";
        }
    });
});
