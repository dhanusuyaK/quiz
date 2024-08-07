@extends('layouts.main')
@section('title', 'Question Bank - Add question')

@section('content')
<div class="container mt-4">

            <div class="col text-center">
                <h1>Add Questions</h1>
            </div>
            <form>
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
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter the Option A" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter the Option B" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter the Option C" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter the Option D" required>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="correctAnswer">Correct Answer</label>
                    <input type="text" class="form-control" id="correctAnswer" placeholder="Enter the correct answer">
                </div>
                <div class="row">
                <div class="col-12 col-md-6 mx-auto pt-4">
                    <a href="" class="btn btn-success w-100 text-decoration-none text-white">Add Question</a>
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
                        <th>Database Name</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Status</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Sample Database</td>
                        <td>What is the largest planet in our Solar System?</td>
                        <td>C</td>
                        <td>Active</td>
                        <td><a class="btn btn-success btn-sm" target="_blank" href="#" role="button">View</a></td>
                        <td><a class="btn btn-warning btn-sm" target="_blank" href="#" role="button">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" target="_blank" href="#" role="button">Delete</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        </div>
        </div>

        </div>
    
@endsection
        