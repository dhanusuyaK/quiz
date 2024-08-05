<!doctype html>
<html lang="en">

<head>
    <title>Quiz - Add Test</title>
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
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
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
            <div class="row p-3 ps-5">
                <p class="text-center fs-2 fw-bolder">Add New Question Bank</p>
            </div>
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

                <div class="col-12 col-md-6 mb mb-3 mt-3">
                    <label for="questionBankName" class="form-label">Question Bank Name</label>
                    <input type="text" class="form-control" id="questionBankName" name="questionBankName">
                </div>


            </div>
            <div class="d-grid gap-2 col-6 mx-auto pt-4">
                <button class="btn btn-success w-10" type="button"><a href="{{ route('teacher.quiz.question.add') }}"
                        class="text-decoration-none text-white">Add</a></button>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>