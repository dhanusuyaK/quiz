<!doctype html>
<html lang="en">

<head>
    <title>QUIZ</title>
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
        <div class="container">
            <div class="row mt-4 pt-4">
                <p class="text-center fs-2 fw-bolder">Quiz</p>
            </div>
            <div class="row mt-2">
                <button class="btn btn-primary w-10" type="button"><a href="{{route('teacher.quiz.add')}}"
                        class="text-decoration-none text-white">Add Quiz</a></button>
            </div>
            <div class="row mt-2">
                <button class="btn btn-primary w-10" type="button"><a href="{{route('teacher.quiz.view')}}"
                        class="text-decoration-none text-white">View Quiz</a></button>
            </div>
            <div class="row mt-2">
                <button class="btn btn-primary w-10" type="button"><a href="{{route('teacher.questionbank.add')}}"
                        class="text-decoration-none text-white">Add Question Bank</a></button>
            </div>
            <div class="row mt-2">
                <button class="btn btn-primary w-10" type="button"><a href="{{route('teacher.questionbank.view')}}"
                        class="text-decoration-none text-white">View Question Bank</a></button>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
