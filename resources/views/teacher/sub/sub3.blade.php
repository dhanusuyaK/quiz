
@extends('layouts.main')
@section('title', 'Sub 3')
@section('content')
        <div class="container mt-3">
        <ul class="list-group">

            @foreach($sub3 as $subject3)
            <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                    class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub4', ['sub1' => $sub1,'sub2' => $sub2,'sub3' => $subject3->sub3, 'table_type'=>$table_type])}}">
                    <h5 class="text-center">{{$subject3->sub3n}}</h5>
                </a></li>
            @endforeach

        </ul>
    </div>
@endsection