<?php

namespace App\Http\Controllers;
use App\Models\guardianModel;
use Illuminate\Http\Request;
class guardianController extends Controller
{
    //

    function addGuardian(request $req)
    {
        $form = new guardianModel;

        $form->gname=$req->gname;
        $form->email=$req->email;
        $form->cnic=$req->cnic;
        $form->address=$req->address;
        $form->occpation=$req->occpation;
        $form->save();

        return redirect('guardian');
    }
}
