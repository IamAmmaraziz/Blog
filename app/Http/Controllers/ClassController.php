<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    function addClass(request $req)
    {

        $form = new ClassModel;

        $form->class=$req->class;
        $form->allowed=$req->allowed;
        $form->save();
        return redirect('class');
    }

}
