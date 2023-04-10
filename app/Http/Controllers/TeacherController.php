<?php

namespace App\Http\Controllers;
use App\Models\form;
use App\Models\teacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    function addTeacher(request $req)
    {

        $form = new teacherModel;

        $form->fname=$req->fname;
        $form->lname=$req->lname;
        $form->email=$req->email;
        $form->cnic=$req->cnic;
        $form->Specelization=$req->Specelization;
        $form->class=$req->class;
        $form->save();
        return redirect('teacher');
    }

}
