@extends('layouts.main')
@section('title', 'Teacher')

@section('content')



<div class="container mt-3">
    <ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a class="text-decoration-none"
                style="color:black" href="{{route('teacher.quiz.add')}}">
                <h5 class="text-center">Add Quiz</h5>
            </a></li>
            <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a class="text-decoration-none"
                style="color:black" href="{{ route('teacher.quiz.view') }}">
                <h5 class="text-center">View Quiz</h5>
            </a></li>
        <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a class="text-decoration-none"
                style="color:black" href="{{ route('teacher.questionbank.add') }}">
                <h5 class="text-center">Add Question Bank</h5>
            </a></li>
           
        <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a class="text-decoration-none"
                style="color:black" href="{{ route('teacher.questionbank.view') }}">
                <h5 class="text-center">View Question Bank</h5>
            </a></li>
    </ul>
</div>
@endsection