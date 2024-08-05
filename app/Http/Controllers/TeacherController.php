<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function home()
    {
        return view("teacher.index");
    }

    public function quizAdd()
    {
        return view("teacher.quiz.quiz-add");
    }

    public function quizView()
    {
        return view("teacher.quiz.quiz-view");
    }

    public function quizQuestionAdd()
    {
        return view("teacher.quiz.quiz-question-add");
    }

    public function quizQuestionView()
    {
        return view("teacher.quiz.quiz-question-view");
    }


    public function questionBankAdd()
    {
        return view("teacher.quiz.questionbank-add");
    }

    public function questionBanView()
    {
        return view("teacher.quiz.questionbank-view");
    }

    public function questionBanQuestionAdd()
    {
        return view("teacher.quiz.questionbank-question-add");
    }

    public function questionBanQuestionView()
    {
        return view("teacher.quiz.questionbank-question-view");
    }
}
