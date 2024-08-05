<!doctype html>
<html lang="en">

<head>
    <title>Quiz - View Quizzes</title>
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
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">View Quizzes</a>
                        </li>
                        <!-- Add other navigation items here -->
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
                <p class="text-center fs-2 fw-bolder">View Question Bank</p>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto pt-4">
                <a class="btn btn-primary w-100" href="{{ route('teacher.questionbank.add') }}" role="button">Add New Question Bank</a>
            </div>
            <hr>
            <div class="container mt-3">
            <ul class="list-group">
                @foreach($sub1 as $subject1)
                <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                        class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub2',['sub1' => $subject1->sub1]) }}">
                        <h5 class="text-center">{{$subject1->sub1n }}</h5>
                    </a></li>
                @endforeach
            </ul>
        </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
