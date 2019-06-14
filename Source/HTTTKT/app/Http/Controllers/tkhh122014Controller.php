<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\tkhh122014;


class tkhh122014Controller extends Controller
{
    //
    public function index(){        
        return view('admin.tkhh122014.index');

    }   

    public function datatables_tkhh122014(){
        $tkhh122014 = tkhh122014::all();       

        return Datatables::of($tkhh122014)
        ->make(true);
    }

}
