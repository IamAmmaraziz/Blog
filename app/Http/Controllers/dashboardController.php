<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //

    function dbOperations(){
        $item= DB::table('forms')->count();
        $data= DB::table('class')->count();
        $teach= DB::table('teacher')->count();
        $guard= DB::table('guardian')->count();
        return view('dashboard',['data'=>$data,'items'=>$item,'teacher'=>$teach,'guardian'=>$guard]);
    }

}

