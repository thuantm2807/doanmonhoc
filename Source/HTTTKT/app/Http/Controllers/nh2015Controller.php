<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\nh2015;


class nh2015Controller extends Controller
{
    //
    public function index(){        
        return view('admin.nh2015.index');

    }   

    public function datatables_nh2015(){
        $nh2015 = nh2015::all();       

        return Datatables::of($nh2015)
        ->make(true);
    }

}
