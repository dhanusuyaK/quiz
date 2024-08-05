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
    <main class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="fs-2 fw-bolder">Add Questions</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-end pb-4">
                    <button class="btn btn-primary " type="submit">Add from Question Bank</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="queNo" class="form-label">Question Number</label>
                            <input type="number" class="form-control" id="queNo" placeholder="Enter question number"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <input type="text" class="form-control" id="question" placeholder="Enter the question"
                                required>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="optionA" class="form-label">Option A</label>
                                <input type="text" class="form-control" id="optionA" placeholder="Enter option A"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="optionB" class="form-label">Option B</label>
                                <input type="text" class="form-control" id="optionB" placeholder="Enter option B"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="optionC" class="form-label">Option C</label>
                                <input type="text" class="form-control" id="optionC" placeholder="Enter option C"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="optionD" class="form-label">Option D</label>
                                <input type="text" class="form-control" id="optionD" placeholder="Enter option D"
                                    required>
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
                        <div class="row justify-content-center mb-3">
                            <div class="col-auto">
                                <a href="#" class="btn btn-success">Add Question</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6" data-bs-spy="scroll">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
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
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr><tr>
                                    <td scope="row">1</td>
                                    <td>Sample Database</td>
                                    <td>What is the largest planet in our Solar System?</td>
                                    <td>C</td>
                                    <td>Active</td>
                                    <td><a class="btn btn-success btn-sm" target="_blank" href="#"
                                            role="button">View</a></td>
                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="#"
                                            role="button">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" target="_blank" href="#"
                                            role="button">Delete</a></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>