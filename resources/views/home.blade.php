@extends('layouts.main')
@section('title', 'Quiz Portal')

@section('content')
<div class="container mt-3">
    <ul class="list-group">
        <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                class="text-decoration-none" style="color:black" href="">
                <h5 class="text-center">Admin</h5>
            </a></li>
        <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                class="text-decoration-none" style="color:black" href="{{ route('student.sub1') }}">
                <h5 class="text-center">Student</h5>
            </a></li>
        <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                class="text-decoration-none" style="color:black" href="{{ route('teacher.home') }}">
                <h5 class="text-center">Teachers</h5>
            </a></li>
    </ul>
</div>
@endsection
