<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ph2015;


class ph2015Controller extends Controller
{
    //
    public function index(){        
        return view('admin.ph2015.index');

    }   

    public function datatables_ph2015(){
        $ph2015 = ph2015::all();       

        return Datatables::of($ph2015)
        ->make(true);
    }

}
