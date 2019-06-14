<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\bh2015;


class bh2015Controller extends Controller
{
    //
    public function index(){        
        return view('admin.bh2015.index');

    }   

    public function datatables_bh2015(){
        $bh2015 = bh2015::all();       

        return Datatables::of($bh2015)
        ->make(true);
    }

}
