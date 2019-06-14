<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\c3311_122014;


class c3311_122014Controller extends Controller
{
    //
    public function index(){        
        return view('admin.c3311_122014.index');

    }   

    public function datatables_c3311_122014(){
        $c3311_122014 = c3311_122014::all();       

        return Datatables::of($c3311_122014)
        ->make(true);
    }

}
