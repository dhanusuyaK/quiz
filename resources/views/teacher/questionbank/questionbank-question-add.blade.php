<!doctype html>
<html lang="en">

<head>
    <title>Quiz - Add Questions</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <strong><a class="navbar-brand" style="color: #fff700;" href="">www.CFA.com</a></strong>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Important</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" target="blank">Free Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Important</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Study Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Policy</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-danger" href="" role="button">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>

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
    </main>

    <!-- Edit Question Modal -->
    <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editQuestionNumber" class="form-label">Question No</label>
                            <input type="number" class="form-control" id="editQuestionNumber" required value="1">
                        </div>
                        <div class="mb-3">
                            <label for="editQuestionText" class="form-label">Question</label>
                            <textarea class="form-control" id="editQuestionText" rows="4"
                                required>What is the largest planet in our Solar System?</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editOptionA" class="form-label">Option A</label>
                            <input type="text" class="form-control" id="editOptionA" required value="Option A">
                        </div>
                        <div class="mb-3">
                            <label for="editOptionB" class="form-label">Option B</label>
                            <input type="text" class="form-control" id="editOptionB" required value="Option B">
                        </div>
                        <div class="mb-3">
                            <label for="editOptionC" class="form-label">Option C</label>
                            <input type="text" class="form-control" id="editOptionC" required value="Option C">
                        </div>
                        <div class="mb-3">
                            <label for="editOptionD" class="form-label">Option D</label>
                            <input type="text" class="form-control" id="editOptionD" required value="Option D">
                        </div>
                        <div class="mb-3">
                            <label for="editCorrectAnswer" class="form-label">Answer</label>
                            <select class="form-select" id="editCorrectAnswer" required>
                                <option value="A">Option A</option>
                                <option value="B">Option B</option>
                                <option value="C" selected>Option C</option>
                                <option value="D">Option D</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>