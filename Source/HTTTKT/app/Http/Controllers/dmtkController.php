<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\dmtk;


class dmtkController extends Controller
{
    //
    public function index(){        
        return view('admin.dmtk.index');

    }   

    public function datatables_dmtk(){
        $dmtk = dmtk::all();       

        return Datatables::of($dmtk)
        ->make(true);
    }

}
