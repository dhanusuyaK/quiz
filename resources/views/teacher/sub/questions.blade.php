@extends('layouts.main')
@section('title', 'Questions')
@section('content')
<main>
    <div class="container pt-4">
        @foreach ($questions as $question)
            <div class="alert alert-primary " role="alert">
                <div class="alert alert-danger question-background">
                    <h2 class="alert-heading">
                        <a class="question" href="">
                            <strong class="question-id">{{$loop->iteration}}</strong>{{ $question->question }}
                        </a>
                    </h2>
                </div>
                <!-- Show Question Image if qimgavl variable set to yes -START -->
                <!-- Show Question Image if qimgavl variable set to yes -END -->
                <div class="alert alert-warning" style="background-color: white; color:black;">
                    <form>
                        <div class="radio" id="A1">
                            <label>
                                <p class="option"><input type="radio" name="1" id="A1" option="HTML 4.1"
                                        answer="{{ $question->answer }}">{{ $question->option1 }}
                                </p>
                            </label>
                        </div>
                        <div class="radio" id="B1">
                            <label>
                                <p class="option"><input type="radio" name="1" id="B1" option="HTML 4"
                                        answer="{{ $question->answer }}"> {{ $question->option2 }}
                                </p>
                            </label>
                        </div>

                        <div class="radio" id="C1">
                            <label>
                                <p class="option"><input type="radio" name="1" id="C1" option="HTML 4.9"
                                        answer="{{ $question->answer }}"> {{ $question->option3 }}
                                </p>
                            </label>
                        </div>

                        <div class="radio" id="D1">
                            <label>
                                <p class="option"><input type="radio" name="1" id="D1" option="HTML 4.01"
                                        answer="{{ $question->answer }}">
                                    {{ $question->option4 }}</p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="d-grid gap-2">
            <button class="btn btn-primary mb-4 p-4 fs-3 " type="button">
                <a class="text-white" href="result.php">Submit</a></button>

        </div>

    </div>

</main>
@endsection