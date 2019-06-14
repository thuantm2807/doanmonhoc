<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\dmch;


class dmchController extends Controller
{
    //
    public function index(){        
        return view('admin.dmch.index');

    }   

    public function datatables_dmch(){
        $dmch = dmch::all();       

        return Datatables::of($dmch)
        ->make(true);
    }

}
