
@extends('layouts.main')
@section('title', 'Quiz - View Questions')

@section('content')
<div class="container mt-5">
            <div class="row p-2 ps-5">
                <p class="text-center fs-2 fw-bolder">Add Questions</p>
            </div>
            <form>
                <div class="mb-3">
                    <label for="queNo" class="form-label">Question Number</label>
                    <input type="number" class="form-control" id="queNo" placeholder="Enter question number" required>
                </div>
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" class="form-control" id="question" placeholder="Enter the question" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Options</label>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="optionA" class="form-label">Option A</label>
                            <input type="text" class="form-control" id="optionA" placeholder="Enter option A" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="optionB" class="form-label">Option B</label>
                            <input type="text" class="form-control" id="optionB" placeholder="Enter option B" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="optionC" class="form-label">Option C</label>
                            <input type="text" class="form-control" id="optionC" placeholder="Enter option C" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="optionD" class="form-label">Option D</label>
                            <input type="text" class="form-control" id="optionD" placeholder="Enter option D" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Correct Answer</label>
                    <select class="form-select" id="answer" required>
                        <option value="" disabled selected>Select the correct answer</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto pt-4">
                    <button class="btn btn-success" type="submit">Add Question</button>
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
                    <tr class="">
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="btn btn-success btn-sm" target="_blank" href="" role="button">View</a></td>
                        <td><a class="btn btn-warning btn-sm" target="_blank" href="" role="button">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" target="_blank" href="" role="button">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        </div>
 
@endsection
        