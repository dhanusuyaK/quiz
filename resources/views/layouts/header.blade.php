<!-- place navbar here -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <strong><a class="navbar-brand" style="color: #fff700;" href="">www.CFA.com</a></strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher.home')}}">Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('student.home')}}">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Admin</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-danger" href="" role="button">Logout</a>
            </div>
        </div>
    </div>
</nav>