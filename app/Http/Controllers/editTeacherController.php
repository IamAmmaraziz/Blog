<?php

namespace App\Http\Controllers;
use App\Models\editTeacherModel;

use Illuminate\Http\Request;

class editTeacherController extends Controller
{
    //
    function list(){

        $data=editTeacherModel::all();

        return view('editteacher',['items'=>$data]);

    }
    function show(){

        $data=editTeacherModel::all();

        return view('viewTeacher',['items'=>$data]);

    }

    function delete($id){

        $data=editTeacherModel::find($id);
        $data->delete();
        return redirect('editteacher');
    }

    function edit($id){

        $data= editTeacherModel::find($id);

        return view('update',['data'=>$data]);
    }
    function edited(request $req){
        $data=editTeacherModel::find($req->id);
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->email=$req->email;
        $data->cnic=$req->cnic;
        $data->Specelization=$req->Specelization;
        $data->class=$req->class;
        $data->save();
        return redirect('editteacher');

    }


}
