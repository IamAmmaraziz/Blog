<?php

namespace App\Http\Controllers;
use App\Models\form;
//use App\Models\guardianModel;
use App\Models\viewClassModel;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    function addStudent(request $req)
    {
        if ($req->isMethod('post')) {
            $form = new form();

            $form->fname = $req->fname;
            $form->lname = $req->lname;
            $form->email = $req->email;
            $form->cnic = $req->cnic;
            $form->address = $req->address;
            $form->country = $req->country;
            $form->city = $req->city;
            $form->post = $req->post;
            $form->pclass = $req->pclass;
            $form->year = $req->year;
            $form->rollno = $req->rollno;
            $form->save();

            return redirect('student');
        }

    }

}
