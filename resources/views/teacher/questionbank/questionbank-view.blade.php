@extends('layouts.main')
@section('title', 'View Question Bank')

@section('content')
<div class="container mt-5">
            <div class="row p-3 ps-5">
                <p class="text-center fs-2 fw-bolder">View Question Bank</p>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto pt-4">
                <a class="btn btn-primary w-100" href="" role="button">Add New Question Bank</a>
            </div>

            <div class="container mt-3">
            <ul class="list-group">
               
                <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                        class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub1',['sub1' => $sub1, 'table_type'=>'ADM']) }}">
                        <h5 class="text-center">Admin Question Bank</h5>
                    </a></li>

                    <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                        class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub1',['sub1' => $sub1, 'table_type'=>'PUB']) }}">
                        <h5 class="text-center">Public Question Bank</h5>
                    </a></li>
                    <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                        class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub1',['sub1' => $sub1, 'table_type'=>'PVT']) }}">
                        <h5 class="text-center">Private Question Bank</h5>
                    </a></li>
               
            </ul>
        </div>
        </div>
@endsection

        
  