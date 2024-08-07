

@extends('layouts.main')
@section('title', 'Add Quiz')

@section('content')
<div class="container mt-5">
    <div class="row p-3 ps-5">
        <p class="text-center fs-2 fw-bolder">Add New Quiz</p>
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
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="subject3" class="form-label">Select Sub 3</label>
                <select class="form-select" id="subject3" name="subject3" aria-label="Subject 3" required>
                    <option selected disabled>Choose Sub 3</option>
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3 mt-3">
                <label for="quizName" class="form-label">Quiz Name</label>
                <input type="text" class="form-control" id="quizName" name="quizName" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 mx-auto pt-4">
                <button type="submit" class="btn btn-success w-100 text-decoration-none text-white">Create Quiz</button>
            </div>
        </div>
    </form>
</div>

<script>
document.getElementById('subject1').addEventListener('change', function() {
    let subject1 = this.value;
    fetch(`/get-sub2/${subject1}`)
        .then(response => response.json())
        .then(data => {
            let subject2 = document.getElementById('subject2');
            subject2.innerHTML = '<option selected disabled>Choose Sub 2</option>';
            data.forEach(sub => {
                subject2.innerHTML += `<option value="${sub.sub2}">${sub.sub2n}</option>`;
            });
        });
});

document.getElementById('subject2').addEventListener('change', function() {
    let subject1 = document.getElementById('subject1').value;
    let subject2 = this.value;
    fetch(`/get-sub3/${subject1}/${subject2}`)
        .then(response => response.json())
        .then(data => {
            let subject3 = document.getElementById('subject3');
            subject3.innerHTML = '<option selected disabled>Choose Sub 3</option>';
            data.forEach(sub => {
                subject3.innerHTML += `<option value="${sub.sub3}">${sub.sub3n}</option>`;
            });
        });
});

// Assuming there is a subject4 select element if needed.
// If not, the code below should be adapted or removed.

document.getElementById('subject3').addEventListener('change', function() {
    let subject1 = document.getElementById('subject1').value;
    let subject2 = document.getElementById('subject2').value;
    let subject3 = this.value;
    fetch(`/get-sub4/${subject1}/${subject2}/${subject3}`)
        .then(response => response.json())
        .then(data => {
            let subject4 = document.getElementById('subject4'); // If you have a subject4 select element
            subject4.innerHTML = '<option selected disabled>Choose Sub 4</option>';
            data.forEach(sub => {
                subject4.innerHTML += `<option value="${sub.sub4}">${sub.sub4n}</option>`;
            });
        });
});

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
    if (!subject1) {
        formIsValid = false;
        displayErrorMessage('subject1', 'Please select Subject 1.');
    }

    if (!subject2) {
        formIsValid = false;
        displayErrorMessage('subject2', 'Please select Subject 2.');
    }

    if (!subject3) {
        formIsValid = false;
        displayErrorMessage('subject3', 'Please select Subject 3.');
    }
    
    if (quizName.trim() === '') {
        formIsValid = false;
        displayErrorMessage('quizName', 'Please enter a quiz name.');
    }

    if (formIsValid) {
        // If the form is valid, navigate to the next page
        window.location.href = "{{ route('teacher.quiz.question.add') }}";
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
