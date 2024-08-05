<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Auth Controller
Route::get('/', [MainController::class, 'logout'])->name('logout');


// Main Routes
Route::get('/', [MainController::class, 'home'])->name('home');



// Teacher Routes
Route::get('/teacher', [TeacherController::class, 'home'])->name('teacher.home');

Route::get('/teacher/quiz/add', [TeacherController::class, 'quizAdd'])->name('teacher.quiz.add');
Route::get('/teacher/quiz/view', [TeacherController::class, 'quizView'])->name('teacher.quiz.view');
Route::get('/teacher/quiz/question/add', [TeacherController::class, 'quizQuestionAdd'])->name('teacher.quiz.question.add');
Route::get('/teacher/quiz/question/view', [TeacherController::class, 'quizQuestionView'])->name('teacher.quiz.question.view');


Route::get('/teacher/questionbank/add', [TeacherController::class, 'questionBankAdd'])->name('teacher.questionbank.add');
Route::get('/teacher/questionbank/view', [TeacherController::class, 'questionbankView'])->name('teacher.questionbank.view');
Route::get('/teacher/questionbank/question/add', [TeacherController::class, 'questionbankQuestionAdd'])->name('teacher.questionbank.question.add');
Route::get('/teacher/questionbank/question/view', [TeacherController::class, 'questionbankQuestionView'])->name('teacher.questionbank.question.view');


Route::get('/student/questions/{sub4}/{questions_in_each_set}/{set}', [StudentController::class, 'questions'])->name('student.questions');
Route::get('/student', [StudentController::class, 'home'])->name('student.home');
Route::get('/student/sub1', [StudentController::class, 'sub1'])->name('student.sub1');
Route::get('/student/{sub1}', [StudentController::class, 'sub2'])->name('student.sub2');
Route::get('/student/{sub1}/{sub2}', [StudentController::class, 'sub3'])->name('student.sub3');
Route::get('/student/{sub1}/{sub2}/{sub3}', [StudentController::class, 'sub4'])->name('student.sub4');
Route::get('/student/{sub1}/{sub2}/{sub3}/{sub4}', [StudentController::class, 'sub5'])->name('student.sub5');

