
@extends('layouts.main')
@section('title', 'Sub 2')
@section('content')
        <div class="container mt-3 pb-4">
        <ul class="list-group">
            @foreach($sub2 as $subject2)
            <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                    class="text-decoration-none" style="color:black" href="{{ route('teacher.sub.sub3', ['sub1' => $sub1,'sub2' => $subject2->sub2,  'table_type'=>$table_type])}}">
                    <h5 class="text-center">{{$subject2->sub2n}}</h5>
                </a></li>
            @endforeach
    </div>
@endsection