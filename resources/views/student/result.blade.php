<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
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
    <!-- <div class="container pt-4">
      <ul class="list-group ">
        <li class="list-group-item p-4 d-flex border border-secondary justify-content-between align-items-center">

           Total Questions -10
          
        </li>
        <li class="list-group-item p-4 d-flex  border border-secondary justify-content-between align-items-center">
          Attended -8
          
        </li>
        <li class="list-group-item p-4 d-flex border border-secondary justify-content-between align-items-center">
          Correct-6
          
        </li>
        <li class="list-group-item p-4 d-flex  border border-secondary justify-content-between align-items-center">
         Wrong-2
          
        </li>
        <li class="list-group-item  d-flex  border border-secondary justify-content-between align-items-center">
         Your Score = 60% and 75%
          
        </li>

      </ul>
    </div> -->
    <div class="container pt-4">
    <table class="table table-bordered table-striped table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Total Questions</th>
                        <th>Attened</th>
                        
                        <th scope="col">Correct</th>
                        <th scope="col">Incorrect</th>
                        <th scope="col">Score</th>
                        <th scope="col">Overall Score</th>
                        

                    </tr>
                </thead>
                <tbody>
                   
                    <tr class="">
                        
                        <td scope="row">{{ $loop->iteration ($visitcounter->db_name) }}</td>
                        <td>{{ getMatchingDatabaseRealName($visitcounter->db_name) }}</td>
                        
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>
                        
                    </tr>
                    <tr class="">
                        
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ getMatchingDatabaseRealName($visitcounter->db_name) }}</td>
                        
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>

                    </tr>
                    <tr class="">
                        
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ getMatchingDatabaseRealName($visitcounter->db_name) }}</td>
                        
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>
                        <td>{!! $visitcounter->answer !!}</td>
                        <td>{{ $visitcounter->status }}</td>

                    </tr>
                    
                </tbody>
            </table>
            </div>

    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>