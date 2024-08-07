<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sub1()
    {
        $sub1 = DB::table('a0_question_bank_master')
            ->select('sub1', 'sub1n', 'sub1b')
            ->groupBy('sub1', 'sub1n', 'sub1b')
            ->get();
        return view('student.sub1', compact('sub1'));
    }

    public function sub2($sub1)
    {
        $sub2 = DB::table('a0_question_bank_master')
            ->select('sub2', 'sub2n', 'sub2b')
            ->groupBy('sub2', 'sub2n', 'sub2b')
            ->where('sub1', $sub1)
            ->orderBy('sub2')
            ->get();
        return view('student.sub2', compact('sub1', 'sub2'));
    }

    public function sub3($sub1, $sub2)
    {
        $sub3 = DB::table('a0_question_bank_master')
            ->select('sub3', 'sub3n', 'sub3b')
            ->groupBy('sub3', 'sub3n', 'sub3b')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->orderBy('sub3')
            ->get();
        return view('student.sub3', compact('sub1', 'sub2', 'sub3'));
    }

    public function sub4($sub1, $sub2, $sub3)
    {
        $sub4 = DB::table('a0_question_bank_master')
            ->select('sub4', 'sub4n', 'sub4b')
            ->groupBy('sub4', 'sub4n', 'sub4b')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->where('sub3', $sub3)
            ->orderBy('sub4')
            ->get();
        return view('student.sub4', compact('sub1', 'sub2', 'sub3', 'sub4'));
    }

    public function sub5($sub1, $sub2, $sub3, $sub4)
    {
        $questions_in_each_set = 10;
        $questions_count = DB::table($sub4)->count();
        $questions_sets = ceil($questions_count / $questions_in_each_set);
        return view('student.sub5', compact('questions_sets', 'sub4', 'questions_in_each_set'));
    }

    public function questions($sub4, $questions_in_each_set, $set)
    {
        $questions = DB::table($sub4)->offset($questions_in_each_set * ($set - 1))->limit($questions_in_each_set)->get();
        return view('student.questions', compact('questions'));
    }
}
