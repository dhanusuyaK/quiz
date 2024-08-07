@extends('layouts.main')
@section('title', 'Quiz - Add question')

@section('content')
<div class="container mt-4">

    <div class="col text-center">
        <h1>Add Questions</h1>
    </div>
    <div class="row">
        <div class="col text-end pb-4">
            <button class="btn btn-primary">Add from Question Bank</button>
        </div>
    </div>

    <form id="queForm" method="POST" action="{{route('teacher.quiz.question.add.new')}}">
        @csrf
        <div class="form-group mb-3">
            <label for="queNo">Question Number</label>
            <input type="number" class="form-control" name="uid" id="queNo" placeholder="Enter question number" required>
        </div>
        <div class="form-group mb-3">
            <label for="question">Question</label>
            <input type="text" class="form-control" name="question" id="question" placeholder="Enter the question" required>
        </div>
        <div class="form-group mb-3">
            <label>Options</label>
            <div class="form-row">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="option1" id="opt-A" placeholder="Enter the Option A" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="option2" id="opt-B" placeholder="Enter the Option B" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="option3" id="opt-C" placeholder="Enter the Option C" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="option4" id="opt-D" placeholder="Enter the Option D" required>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="correctAnswer">Correct Answer</label>
            <input type="text" class="form-control" name="answer" id="correctAnswer" placeholder="Enter the correct answer">
        </div>

        <div class="row">
            <div class="col-12 col-md-6 mx-auto pt-4">
                <button type="submit" class="btn btn-success w-100 text-decoration-none text-white">Add Question</button>
            </div>
        </div>
    </form>
</div>

<hr>

<div class="container mt-2">
    <table class="table table-bordered table-striped table-responsive">
        <thead class="table-dark">
            <tr>
                <th scope="col">Question No</th>                
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>@foreach($questions as $question)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>                
                <td>{{$question->question}}</td>
                <td>{{$question->answer}}</td>
                <td><a class="btn btn-warning btn-sm" href="{{ route('teacher.quiz.question.edit')}}" role="button">Edit</a></td>
                <td>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="1">Delete</button>
                </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this question?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script>
    document.getElementById('queForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        let formIsValid = true;

        // Reset any previous validation error messages
        const errorMessages = document.querySelectorAll('.validation-error');
        errorMessages.forEach(message => message.remove());

        // Simple validation example
        if (document.getElementById('queNo').value.trim() === '') {
            formIsValid = false;
            displayErrorMessage('queNo', 'Please enter the question number.');
        }

        if (document.getElementById('question').value.trim() === '') {
            formIsValid = false;
            displayErrorMessage('question', 'Please enter the question.');
        }

        if (document.getElementById('correctAnswer').value.trim() === '') {
            formIsValid = false;
            displayErrorMessage('correctAnswer', 'Please enter the correct answer.');
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

    // Handle delete button click
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var questionId = button.data('id'); // Extract info from data-* attributes
        
        var modal = $(this);
        modal.find('#confirmDelete').data('id', questionId); // Store the ID in the confirm button
    });

    // Confirm delete action
    $('#confirmDelete').on('click', function () {
        var questionId = $(this).data('id');
        // Implement delete action here, e.g., send an AJAX request to delete the question
        alert('Question ' + questionId + ' deleted successfully.');
        $('#deleteModal').modal('hide'); // Hide the modal
    });
</script> -->
@endsection
