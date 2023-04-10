<?php

namespace App\Http\Controllers;
use App\Models\editGuardianModel;

use Illuminate\Http\Request;

class editGuardianController extends Controller
{
    //
    function list(){

        $data=editGuardianModel::all();

        return view('editguardian',['items'=>$data]);

    }
    function show(){

        $data=editGuardianModel::all();

        return view('viewguardian',['items'=>$data]);

    }

    function delete($id){

        $data=editGuardianModel::find($id);
        $data->delete();
        return redirect('editguardian');
    }

    function edit($id){

        $data= editGuardianModel::find($id);

        return view('updateGuardian',['data'=>$data]);
    }
    function edited(request $req){
        $data=editGuardianModel::find($req->id);
        $data->gname=$req->gname;
        $data->email=$req->email;
        $data->cnic=$req->cnic;
        $data->address=$req->address;
        $data->occpation=$req->occpation;
        $data->save();
        return redirect('editguardian');

    }


}
