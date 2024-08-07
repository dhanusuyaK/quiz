<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{


    /*------------------------------------------------HOME------------------------------------------------*/
    public function home()
    {
        return view("teacher.index");
    }


    /*-----------------------------------------------QUIZ------------------------------------------------*/

    // QUIZ - HOME
    public function quizHome()
    {
        return view("teacher.quiz.quiz-home");
    }

    public function quizAdd()
    {
        $sub1 = DB::table('a0_question_bank_master')
            ->select('sub1', 'sub1n')
            ->groupBy('sub1', 'sub1n')
            ->get();

        // Return the initial data to the view
        return view("teacher.quiz.quiz-add", compact('sub1'));
    }

    public function getSub2($sub1)
    {
        $sub2 = DB::table('a0_question_bank_master')
            ->select('sub2', 'sub2n')
            ->where('sub1', $sub1)
            ->groupBy('sub2', 'sub2n')
            ->orderBy('sub2n', 'asc')
            ->get();

        return response()->json($sub2);
    }

    public function getSub3($sub1, $sub2)
    {
        $sub3 = DB::table('a0_question_bank_master')
            ->select('sub3', 'sub3n')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->groupBy('sub3', 'sub3n')
            ->orderBy('sub3n', 'asc')
            ->get();

        return response()->json($sub3);
    }

    public function getSub4($sub1, $sub2, $sub3)
    {
        $sub4 = DB::table('a0_question_bank_master')
            ->select('sub4', 'sub4n')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->where('sub3', $sub3)
            ->groupBy('sub4', 'sub4n')
            ->orderBy('sub4n', 'asc')
            ->get();

        return response()->json($sub4);
    }


    // QUIZ - ADD
    // public function quizAdd()
    // {

    //     $sub1 = DB::table('a0_question_bank_master')
    //         ->select('sub1', 'sub1n')
    //         ->groupBy('sub1', 'sub1n')
    //         ->get();


    //     $firstSub1 = $sub1->first();

    //     $sub2 = [];
    //     $sub3 = [];
    //     $sub4 = [];

    //     if ($firstSub1) {

    //         $sub2 = DB::table('a0_question_bank_master')
    //             ->select('sub2', 'sub2n')
    //             ->where('sub1', $firstSub1->sub1)
    //             ->groupBy('sub2', 'sub2n')
    //             ->orderBy('sub2n', 'asc')
    //             ->get();


    //         $sub3 = DB::table('a0_question_bank_master')
    //             ->select('sub3', 'sub3n')
    //             ->where('sub1', $firstSub1->sub1)
    //             ->groupBy('sub3', 'sub3n')
    //             ->orderBy('sub3n', 'asc')
    //             ->get();

    //         $sub4 = DB::table('a0_question_bank_master')
    //             ->select('sub4', 'sub4n')
    //             ->where('sub1', $firstSub1->sub1)
    //             ->groupBy('sub4', 'sub4n')
    //             ->orderBy('sub4n', 'asc')
    //             ->get();
    //     }

    //     // Returning the fetched data to the view
    //     return view("teacher.quiz.quiz-add", compact('sub1', 'sub2', 'sub3', 'sub4'));
    // }


    // QUIZ - QUESTION - ADD
    public function quizQuestionAdd()
    {
        $questions = DB::table('qz0001')->get();
        return view("teacher.quiz.quiz-question-add", compact('questions'));
    }

    public function quizQuestionAddNew(Request $request)
    {

        DB::table('qz0001')->insert([
            'uid' => $request->input('uid'),
            'question' => $request->input('question'),
            'option1' => $request->input('option1'),
            'option2' => $request->input('option2'),
            'option3' => $request->input('option3'),
            'option4' => $request->input('option4'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->back();
    }


    // QUIZ - VIEW
    public function quizView()
    {
        $sub1 = DB::table('a0_quiz_master')->get();
        return view("teacher.quiz.quiz-view", compact('sub1'));
    }



    // QUIZ - QUESTION - VIEW
    public function quizQuestionView()
    {
        return view("teacher.quiz.quiz-question-view");
    }




    /*-------------------------------------------- QUESTION BANK -------------------------------------*/



    // QUESTION BANK - ADD
    public function questionBankAdd()
    {
        $sub1 = DB::table('a0_question_bank_master')
            ->select('sub1', 'sub1n')
            ->groupBy('sub1', 'sub1n')
            ->get();


        $firstSub1 = $sub1->first();

        $sub2 = [];
        $sub3 = [];
        $sub4 = [];

        if ($firstSub1) {

            $sub2 = DB::table('a0_question_bank_master')
                ->select('sub2', 'sub2n')
                ->where('sub1', $firstSub1->sub1)
                ->groupBy('sub2', 'sub2n')
                ->orderBy('sub2n', 'asc')
                ->get();


            $sub3 = DB::table('a0_question_bank_master')
                ->select('sub3', 'sub3n')
                ->where('sub1', $firstSub1->sub1)
                ->groupBy('sub3', 'sub3n')
                ->orderBy('sub3n', 'asc')
                ->get();

        }

        // Returning the fetched data to the view
        return view("teacher.questionbank.questionbank-add", compact('sub1', 'sub2', 'sub3'));
    }


    // QUESTION BANK - VIEW
    public function questionBankView()
    {
        $sub1 = DB::table('a0_question_bank_master')
            ->select('sub1', 'sub1n', 'sub1b')
            ->groupBy('sub1', 'sub1n', 'sub1b')
            ->pluck('sub1');
        return view('teacher.questionbank.questionbank-view', compact('sub1'));
    }




    public function questionBankQuestionAdd()
    {
        return view("teacher.questionbank.questionbank-question-add");
    }

    public function questionBankQuestionView()
    {
        return view("teacher.questionbank.questionbank-question-view");
    }


    /*----------------------------------------------------- SUB --------------------------------------*/
    public function sub1($table_type)
    {
        $sub1 = DB::table('a0_question_bank_master')
            ->select('sub1', 'sub1n', 'sub1b')
            ->where('table_type', $table_type)
            ->groupBy('sub1', 'sub1n', 'sub1b')
            ->get();
        return view('teacher.sub.sub1', compact('sub1', 'table_type'));
    }

    public function sub2($sub1, $table_type)
    {
        $sub2 = DB::table('a0_question_bank_master')
            ->select('sub2', 'sub2n', 'sub2b')
            ->groupBy('sub2', 'sub2n', 'sub2b')
            ->where('sub1', $sub1)
            ->where('table_type', $table_type)
            ->orderBy('sub2')
            ->get();
        return view('teacher.sub.sub2', compact('sub1', 'sub2', 'table_type'));
    }

    public function sub3($sub1, $sub2, $table_type)
    {
        $sub3 = DB::table('a0_question_bank_master')
            ->select('sub3', 'sub3n', 'sub3b')
            ->groupBy('sub3', 'sub3n', 'sub3b')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->where('table_type', $table_type)
            ->orderBy('sub3')
            ->get();
        return view('teacher.sub.sub3', compact('sub1', 'sub2', 'sub3', 'table_type'));
    }

    public function sub4($sub1, $sub2, $sub3, $table_type)
    {
        $sub4 = DB::table('a0_question_bank_master')
            ->select('sub4', 'sub4n', 'sub4b')
            ->groupBy('sub4', 'sub4n', 'sub4b')
            ->where('sub1', $sub1)
            ->where('sub2', $sub2)
            ->where('sub3', $sub3)
            ->where('table_type', $table_type)
            ->orderBy('sub4')
            ->get();
        return view('teacher.sub.sub4', compact('sub1', 'sub2', 'sub3', 'sub4', 'table_type'));
    }

    public function sub5($sub1, $sub2, $sub3, $sub4, $table_type)
    {
        $questions_in_each_set = 10;
        $questions_count = DB::table($sub4)->count();
        $questions_sets = ceil($questions_count / $questions_in_each_set);
        return view('teacher.sub.sub5', compact('questions_sets', 'sub4', 'questions_in_each_set'));
    }

    public function questions($sub4, $questions_in_each_set, $set)
    {

        $questions = DB::table($sub4)->offset($questions_in_each_set * ($set - 1))->limit($questions_in_each_set)->get();
        return view('teacher.sub.questions', compact('questions'));
    }




    /*-----------------setting-----------*/


    public function setting()
    {
        return view('teacher.setting');
    }

    public function questionEdit()
    {
        return view('teacher.quiz.quiz-question-edit');
    }







}




