<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ph2015;
use App\tkhh122014;

class TienMatThang1Controller extends Controller
{ 
    private $ton_cuoi = '';

    public function index(){   
    	$data_tong_no = ph2015::select('tc2015.st')->where('tkc','like','%N1111%')
              ->where('NLAP','like','1/%')->join('tc2015','ph2015.pso','tc2015.pso')->get();

    	$data_tong_co = ph2015::select('tc2015.st')->where('tkc','like','%C1111%')
              ->where('NLAP','like','1/%')->join('tc2015','ph2015.pso','tc2015.pso')->get();

      $data_ton_cuoi = tkhh122014::select('sttc')->get();

      $sum_no = [];
      foreach ($data_tong_no as $value) {
        $sum_no[] = str_replace(',','',$value->st);
      }

      $sum_co = [];
      foreach ($data_tong_co as $value) {
        $sum_co[] = str_replace(',','',$value->st);
      }

      $sum_ton_cuoi = [];
      foreach ($data_ton_cuoi as $value) {
        $sum_ton_cuoi[] = str_replace(',','',$value->sttc);
      }
      
    	$data['tong_no'] = array_sum($sum_no);   
      $data['tong_co'] = array_sum($sum_co);
      $data['ton_cuoi'] = array_sum($sum_ton_cuoi);
    	
      return view('admin.baocao.tienmatthang1.index',$data);
    }   

    public function datatables_tienmatthang1(){        

        $tienmatthang1 = ph2015::where('tkc','like','%1111%')->where('NLAP','like','1/%')
        				->join('tc2015','ph2015.pso','tc2015.pso')
        				->get();  

        $data_ton_cuoi = tkhh122014::select('sttc')->get(); 
        $sum_ton_cuoi = [];
        foreach ($data_ton_cuoi as $value) {
          $sum_ton_cuoi[] = str_replace(',','',$value->sttc);
        } 
        $this->ton_cuoi = array_sum($sum_ton_cuoi); 
         

      	return Datatables::of($tienmatthang1)
      	->addColumn('sotienno',function($tienmatthang1){
      		if($tienmatthang1->TKC == 'C1111'){
      			return '';
      		} else {
      			return $tienmatthang1->st;
      		}
      	})
      	->addColumn('sotienco',function($tienmatthang1){
      		if($tienmatthang1->TKC == 'N1111'){
      			return '';
      		} else {
      			return $tienmatthang1->st;
      		}
      	})
      	->addColumn('soton',function($tienmatthang1){ 
          $ton = $this->ton_cuoi;   
          if($tienmatthang1->TKC == 'N1111'){
            $ton +=  str_replace(',','',$tienmatthang1->st);                       
          }else
          if($tienmatthang1->TKC == 'C1111'){
            $ton -=  str_replace(',','',$tienmatthang1->st);  
          }
          return number_format($ton);  
      	})
        ->addColumn('ghichu',function($tienmatthang1){
          return '';
        })
        ->make(true);
    }
}
