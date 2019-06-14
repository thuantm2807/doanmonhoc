<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\dmkh;


class dmkhController extends Controller
{
    //
    public function index(){        
        return view('admin.dmkh.index');

    }   

    public function datatables_dmkh(){
        $dmkh = dmkh::all();       

        return Datatables::of($dmkh)
        ->make(true);
    }

}
