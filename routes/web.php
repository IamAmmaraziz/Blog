<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\editClassController;
use App\Http\Controllers\editGuardianController;
use App\Http\Controllers\editStudentController;
use App\Http\Controllers\editTeacherController;
use App\Http\Controllers\guardianController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', function () {
    return view('Student');
});
Route::get('/guardian', function () {
    return view('Guardian');
});
Route::get('/teacher', function () {
    return view('Teacher');
});
Route::get('/class', function () {
    return view('Class');
});
Route::get('/side', function () {
    return view('side');
});

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/nav', function () {
    return view('nav');
});





Route::post('student',[studentController::class, 'addStudent']);
//Route::get('student',[studentController::class, 'addStudent']);

Route::post('guardian',[guardianController::class, 'addGuardian']);
Route::post('teacher',[TeacherController::class, 'addTeacher']);
Route::post('class',[ClassController::class, 'addClass']);

//Edit Student
Route::get('showstudent',[editStudentController::class, 'show']);
Route::get('editstudent',[editStudentController::class, 'list']);
Route::get('delete/{id}',[editStudentController::class, 'delete']);
Route::get('edit/{id}',[editStudentController::class, 'edit']);
Route::post('updateStudent',[editStudentController::class, 'edited']);
//Edit Guardian
Route::get('showguardian',[editGuardianController::class, 'show']);
Route::get('editguardian',[editGuardianController::class, 'list']);
Route::get('del/{id}',[editGuardianController::class, 'delete']);
Route::get('new/{id}',[editGuardianController::class, 'edit']);
Route::post('updateguardian',[editGuardianController::class, 'edited']);

//Eidt Teacher

Route::get('editteacher',[editTeacherController::class, 'list']);
Route::get('delt/{id}',[editTeacherController::class, 'delete']);
Route::get('showteacher',[editTeacherController::class, 'show']);
Route::get('update/{id}',[editTeacherController::class, 'edit']);
Route::post('updateteacher',[editTeacherController::class, 'edited']);

// Edit Class

Route::get('editclass',[editClassController::class, 'list']);
Route::get('delte/{id}',[editClassController::class, 'delete']);
Route::get('showclass',[editClassController::class, 'show']);
Route::get('updated/{id}',[editClassController::class, 'edit']);
Route::post('updateclass',[editClassController::class, 'edited']);


//=================================================
//==============Dash Board=========================
//=================================================

Route::get('dashboard',[dashboardController::class, 'dbOperations']);


