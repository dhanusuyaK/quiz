
@extends('layouts.main')
@section('title', 'Sub 5')
@section('content')
        <div class="container mt-3">
            <ul class="list-group">
                @for ($i = 1; $i <= $questions_sets; $i++)
                    <li class="list-group-item list-group-item-action list-group-item-warning mt-3"><a
                            class="text-decoration-none" style="color:black"
                            href="{{ route('teacher.questions', ['sub4' => $sub4, 'questions_in_each_set' => $questions_in_each_set, 'set' => $i]) }}">
                            <h5 class="text-center">{{ $sub4 }} (Set-{{ $i }})</h5>
                        </a></li>
                @endfor
            </ul>
        </div>
  @endsection
