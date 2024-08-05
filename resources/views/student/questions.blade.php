<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
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
                        <a class="btn btn-danger" href="{{ route('logout') }}" role="button">Logout</a>
                    </div>
                </div>
            </div>
        </nav>


    </header>
    <main>
        <div class="container pt-4">
            @foreach ($questions as $question)
                <div class="alert alert-primary " role="alert">
                    <div class="alert alert-danger question-background">
                        <h2 class="alert-heading">
                            <a class="question" href="">
                                <strong class="question-id">{{$loop->iteration}}</strong>{{ $question->question }}
                            </a>
                        </h2>
                    </div>
                    <!-- Show Question Image if qimgavl variable set to yes -START -->
                    <!-- Show Question Image if qimgavl variable set to yes -END -->
                    <div class="alert alert-warning" style="background-color: white; color:black;">
                        <form>
                            <div class="radio" id="A1">
                                <label>
                                    <p class="option"><input type="radio" name="1" id="A1"
                                            option="HTML 4.1" answer="{{ $question->answer }}">{{ $question->option1 }}
                                    </p>
                                </label>
                            </div>
                            <div class="radio" id="B1">
                                <label>
                                    <p class="option"><input type="radio" name="1" id="B1"
                                            option="HTML 4" answer="{{ $question->answer }}"> {{ $question->option2 }}
                                    </p>
                                </label>
                            </div>

                            <div class="radio" id="C1">
                                <label>
                                    <p class="option"><input type="radio" name="1" id="C1"
                                            option="HTML 4.9" answer="{{ $question->answer }}"> {{ $question->option3 }}
                                    </p>
                                </label>
                            </div>

                            <div class="radio" id="D1">
                                <label>
                                    <p class="option"><input type="radio" name="1" id="D1"
                                            option="HTML 4.01" answer="{{ $question->answer }}">
                                        {{ $question->option4 }}</p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach

            <div class="d-grid gap-2">
                <button class="btn btn-primary mb-4 p-4 fs-3 " type="button">
                    <a class="text-white" href="result.php">Submit</a></button>

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
