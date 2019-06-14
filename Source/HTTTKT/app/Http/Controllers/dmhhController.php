<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\dmhh;


class dmhhController extends Controller
{
    //
    public function index(){        
        return view('admin.dmhh.index');

    }   

    public function datatables_dmhh(){
        $dmhh = dmhh::all();       

        return Datatables::of($dmhh)
        ->make(true);
    }

}
