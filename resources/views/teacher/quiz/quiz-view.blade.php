

@extends('layouts.main')
@section('title', 'View Quiz')

@section('content')
<div class="container mt-5">
            <div class="row p-3 ps-5">
                <p class="text-center fs-2 fw-bolder">View Quizzes</p>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto pt-4">
                <a class="btn btn-primary w-100" href="" role="button">Add New Quiz</a>
            </div>

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
@endsection

        
  