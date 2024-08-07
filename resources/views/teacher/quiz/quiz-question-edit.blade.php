@extends('layouts.main')
@section('title', 'Edit Question')

@section('content')

<div class="container mt-4">
    <div class="text-center mb-4">
        <h1>Edit Question</h1>
    </div>

    <form id="editQueForm">
        <div class="form-group mb-3">
            <label for="queNo">Question Number</label>
            <input type="number" class="form-control" id="queNo" placeholder="Enter question number" required>
        </div>
        <div class="form-group mb-3">
            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" placeholder="Enter the question" required>
        </div>
        <div class="form-group mb-3">
            <label>Options</label>
            <div class="form-row">
                <div class="form-group  mb-3">
                    <input type="text" class="form-control" id="opt-A" placeholder="Enter Option A" required>
                </div>
                <div class="form-group  mb-3">
                    <input type="text" class="form-control" id="opt-B" placeholder="Enter Option B" required>
                </div>
                <div class="form-group  mb-3">
                    <input type="text" class="form-control" id="opt-C" placeholder="Enter Option C" required>
                </div>
                <div class="form-group  mb-3">
                    <input type="text" class="form-control" id="opt-D" placeholder="Enter Option D" required>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="correctAnswer">Correct Answer</label>
            <input type="text" class="form-control" id="correctAnswer" placeholder="Enter the correct answer" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">Update Question</button>
        </div>
    </form>
</div>


<script>
    // Sample data to simulate pre-filled values
    // const questionData = {
    //     question_number: 1,
    //     question: 'What is the largest planet in our Solar System?',
    //     option_a: 'Earth',
    //     option_b: 'Mars',
    //     option_c: 'Jupiter',
    //     option_d: 'Saturn',
    //     correct_answer: 'C'
    // };

    // Populate form with sample data
    document.getElementById('queNo').value = questionData.question_number;
    document.getElementById('question').value = questionData.question;
    document.getElementById('opt-A').value = questionData.option_a;
    document.getElementById('opt-B').value = questionData.option_b;
    document.getElementById('opt-C').value = questionData.option_c;
    document.getElementById('opt-D').value = questionData.option_d;
    document.getElementById('correctAnswer').value = questionData.correct_answer;

    // Handle form submission
    document.getElementById('editQueForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        let formIsValid = true;

        // Reset previous validation error messages
        const errorMessages = document.querySelectorAll('.invalid-feedback');
        errorMessages.forEach(message => message.remove());

        // Simple validation example
        if (!document.getElementById('queNo').value) {
            formIsValid = false;
            displayErrorMessage('queNo', 'Please enter the question number.');
        }

        if (!document.getElementById('question').value) {
            formIsValid = false;
            displayErrorMessage('question', 'Please enter the question.');
        }

        if (!document.getElementById('correctAnswer').value) {
            formIsValid = false;
            displayErrorMessage('correctAnswer', 'Please enter the correct answer.');
        }

        if (formIsValid) {
            alert('Question updated successfully!');
            // Here you can handle the form data, e.g., send it via AJAX or log it
        }
    });

    function displayErrorMessage(elementId, message) {
        const element = document.getElementById(elementId);
        const errorMessage = document.createElement('div');
        errorMessage.className = 'invalid-feedback d-block';
        errorMessage.innerText = message;
        element.parentNode.appendChild(errorMessage);
        element.classList.add('is-invalid');
    }
</script>


@endsection
