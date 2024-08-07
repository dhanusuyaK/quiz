
@extends('layouts.main')
@section('title', 'Sub 1')
@section('content')
        <div class="container mt-3">
            <ul class="list-group">
                @foreach($sub1 as $subject1)
                <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                        class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub2',['sub1' => $subject1->sub1, 'table_type'=>$table_type]) }}">
                        <h5 class="text-center">{{$subject1->sub1n }}</h5>
                    </a></li>
                @endforeach
            </ul>
        </div>

 @endsection
