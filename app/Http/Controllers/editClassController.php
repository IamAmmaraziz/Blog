<?php

namespace App\Http\Controllers;
use App\Models\editClassModel;

use Illuminate\Http\Request;

class editClassController extends Controller
{
    //

    function list(){

        $data=editClassModel::all();

        return view('editclass',['items'=>$data]);

    }
    function show(){

        $data=editClassModel::all();

        return view('viewClass',['items'=>$data]);

    }

    function delete($id){

        $data=editClassModel::find($id);
        $data->delete();
        return redirect('editclass');
    }

    function edit($id){

        $data= editClassModel::find($id);

        return view('updateClass',['data'=>$data]);
    }
    function edited(request $req){
        $data=editClassModel::find($req->id);
        $data->class=$req->class;
        $data->allowed=$req->allowed;
        $data->save();
        return redirect('editclass');

    }


}
