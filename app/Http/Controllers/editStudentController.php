<?php

namespace App\Http\Controllers;
use App\Models\editStudentModel;
use Illuminate\Http\Request;

class editStudentController extends Controller
{
    //
    function list(){

      $data=editStudentModel::all();

      return view('editStudent',['items'=>$data]);

    }
    function show(){

        $data=editStudentModel::all();

        return view('viewStudent',['items'=>$data]);

    }

    function delete($id){

        $data=editStudentModel::find($id);
        $data->delete();
        return redirect('editstudent');
    }

    function edit($id){

    $data= editStudentModel::find($id);

return view('updateStudent',['data'=>$data]);
    }
function edited(request $req){
$data=editStudentModel::find($req->id);
    $data->fname=$req->fname;
    $data->lname=$req->lname;
    $data->email=$req->email;
    $data->cnic=$req->cnic;
    $data->address=$req->address;
    $data->country=$req->country;
    $data->city=$req->city;
    $data->post=$req->post;
    $data->pclass=$req->pclass;
    $data->year=$req->year;
    $data->rollno=$req->rollno;
    $data->save();
    return redirect('editstudent');

}
}



