<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\cn1311_12014;


class cn1311_12014Controller extends Controller
{
    //
    public function index(){        
        return view('admin.cn1311_12014.index');

    }   

    public function datatables_cn1311_12014(){
        $cn1311_12014 = cn1311_12014::all();       

        return Datatables::of($cn1311_12014)
        ->make(true);
    }

}
