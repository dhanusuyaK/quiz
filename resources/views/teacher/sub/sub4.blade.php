
@extends('layouts.main')
@section('title', 'Sub 4')
@section('content')

        <div class="container mt-3">
            <ul class="list-group">

                @foreach ($sub4 as $subject4)
                    <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                            class="text-decoration-none" style="color:black"
                            href="{{ route('teacher.sub.sub5', ['sub1' => $sub1,'sub2' => $sub2,'sub3' => $sub3,'sub4' =>$subject4->sub4,  'table_type'=>$table_type])}}">
                            <h5 class="text-center">{{ $subject4->sub4n }}</h5>
                        </a></li>
                @endforeach

            </ul>
        </div>
@endsection
