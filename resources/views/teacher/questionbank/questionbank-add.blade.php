@extends('layouts.main')
@section('title', 'Add Question Bank')


@section('content')
<div class="container mt-5">
    <div class="row p-3 ps-5">
        <p class="text-center fs-2 fw-bolder">Add Question Bank</p>
    </div>
    <form id="quizForm">
        <div class="row g-3">
            <div class="col-12 col-md-6 mb-3">
                <label for="subject1" class="form-label">Select Sub 1</label>
                <select class="form-select" id="subject1" name="subject1" aria-label="Subject 1" required>
                    <option selected disabled>Choose Sub 1</option>
                    @foreach($sub1 as $subject1)
                        <option value="{{ $subject1->sub1 }}">{{ $subject1->sub1n }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="subject2" class="form-label">Select Sub 2</label>
                <select class="form-select" id="subject2" name="subject2" aria-label="Subject 2" required>
                    <option selected disabled>Choose Sub 2</option>
                    @foreach($sub2 as $subject2)
                        <option value="{{ $subject2->sub2 }}">{{ $subject2->sub2n }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="subject3" class="form-label">Select Sub 3</label>
                <select class="form-select" id="subject3" name="subject3" aria-label="Subject 3" required>
                    <option selected disabled>Choose Sub 3</option>
                    @foreach($sub3 as $subject3)
                        <option value="{{ $subject3->sub3 }}">{{ $subject3->sub3n }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3 mt-3">
                <label for="questionBankName" class="form-label">Question Bank Name</label>
                <input type="text" class="form-control" id="questionBankName" name="questionBankName" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 mx-auto pt-4">
                <button type="submit" class="btn btn-success w-100 text-decoration-none text-white">Create Question Bank</button>
            </div>
        </div>
    </form>
</div>

<script>
document.getElementById('quizForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the default form submission
    
    let formIsValid = true;
    const quizName = document.getElementById('quizName').value;
    const subject1 = document.getElementById('subject1').value;
    const subject2 = document.getElementById('subject2').value;
    const subject3 = document.getElementById('subject3').value;

    // Reset any previous validation error messages
    const errorMessages = document.querySelectorAll('.validation-error');
    errorMessages.forEach(message => message.remove());

    // Select validation
    if (subject1 === 'Choose Sub 1') {
        formIsValid = false;
        displayErrorMessage('subject1', 'Please select Subject 1.');
    }

    if (subject2 === 'Choose Sub 2') {
        formIsValid = false;
        displayErrorMessage('subject2', 'Please select Subject 2.');
    }

    if (subject3 === 'Choose Sub 3') {
        formIsValid = false;
        displayErrorMessage('subject3', 'Please select Subject 3.');
    }
    
    if (questionBankName.trim() === '') {
        formIsValid = false;
        displayErrorMessage('quizName', 'Please enter a questionbank name.');
    }

    if (formIsValid) {
        // If the form is valid, navigate to the next page
        window.location.href = "{{ route('teacher.questionbank.question.add') }}";
    }
});

function displayErrorMessage(elementId, message) {
    const element = document.getElementById(elementId);
    const errorMessage = document.createElement('div');
    errorMessage.className = 'validation-error text-danger';
    errorMessage.innerText = message;
    element.parentNode.appendChild(errorMessage);
}
</script>
@endsection
