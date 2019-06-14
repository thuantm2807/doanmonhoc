<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ph2015;
use App\tkhh122014;

class NganHangThang1Controller extends Controller
{ 
    private $ton_cuoi = '';

    public function index(){   
    	$data_tong_no = ph2015::select('tc2015.st')->where('tkc','like','%N11211%')
              ->where('NLAP','like','1/%')->join('tc2015','ph2015.pso','tc2015.pso')->get();

    	$data_tong_co = ph2015::select('tc2015.st')->where('tkc','like','%C11211%')
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
    	
      return view('admin.baocao.nganhangthang1.index',$data);
    }   

    public function datatables_nganhangthang1(){        

        $nganhangthang1 = ph2015::where('tkc','like','%11211%')->where('NLAP','like','1/%')
        				->join('tc2015','ph2015.pso','tc2015.pso')
        				->get();  

        $data_ton_cuoi = tkhh122014::select('sttc')->get(); 
        $sum_ton_cuoi = [];
        foreach ($data_ton_cuoi as $value) {
          $sum_ton_cuoi[] = str_replace(',','',$value->sttc);
        } 
        $this->ton_cuoi = array_sum($sum_ton_cuoi); 
         

      	return Datatables::of($nganhangthang1)
      	->addColumn('sotienno',function($nganhangthang1){
      		if($nganhangthang1->TKC == 'C11211'){
      			return '';
      		} else {
      			return $nganhangthang1->st;
      		}
      	})
      	->addColumn('sotienco',function($nganhangthang1){
      		if($nganhangthang1->TKC == 'N11211'){
      			return '';
      		} else {
      			return $nganhangthang1->st;
      		}
      	})
      	->addColumn('soton',function($nganhangthang1){ 
          $ton = $this->ton_cuoi;   
          if($nganhangthang1->TKC == 'N11211'){
            $ton +=  str_replace(',','',$nganhangthang1->st);                       
          }else
          if($nganhangthang1->TKC == 'C11211'){
            $ton -=  str_replace(',','',$nganhangthang1->st);  
          }
          return number_format($ton);  
      	})
        ->addColumn('ghichu',function($nganhangthang1){
          return '';
        })
        ->make(true);
    }
}
