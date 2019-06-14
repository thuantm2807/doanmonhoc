<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\tc2015;


class tc2015Controller extends Controller
{
    //
    public function index(){        
        return view('admin.tc2015.index');

    }   

    public function datatables_tc2015(){
        $tc2015 = tc2015::all();       

        return Datatables::of($tc2015)
        ->make(true);
    }

}
