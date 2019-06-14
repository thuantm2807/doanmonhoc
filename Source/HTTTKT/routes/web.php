<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function() {
   return redirect()->route('bh2015');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'bh2015'], function() {    	
        Route::get('/','bh2015Controller@index')->name('bh2015');       
        Route::get('/datatables_bh2015','bh2015Controller@datatables_bh2015')->name('datatables_bh2015');        
    });   

    Route::group(['prefix' => 'c3311_122014'], function() {    	
        Route::get('/','c3311_122014Controller@index')->name('c3311_122014');       
        Route::get('/datatables_c3311_122014','c3311_122014Controller@datatables_c3311_122014')->name('datatables_c3311_122014');        
    });  

    Route::group(['prefix' => 'cn1311_12014'], function() {    	
        Route::get('/','cn1311_12014Controller@index')->name('cn1311_12014');       
        Route::get('/datatables_cn1311_12014','cn1311_12014Controller@datatables_cn1311_12014')->name('datatables_cn1311_12014');        
    });  

    Route::group(['prefix' => 'dmch'], function() {    	
        Route::get('/','dmchController@index')->name('dmch');       
        Route::get('/datatables_dmch','dmchController@datatables_dmch')->name('datatables_dmch');        
    }); 

    Route::group(['prefix' => 'dmhh'], function() {    	
        Route::get('/','dmhhController@index')->name('dmhh');       
        Route::get('/datatables_dmhh','dmhhController@datatables_dmhh')->name('datatables_dmhh');        
    }); 

    Route::group(['prefix' => 'dmkh'], function() {    	
        Route::get('/','dmkhController@index')->name('dmkh');       
        Route::get('/datatables_dmkh','dmkhController@datatables_dmkh')->name('datatables_dmkh');        
    }); 

    Route::group(['prefix' => 'dmtk'], function() {    	
        Route::get('/','dmtkController@index')->name('dmtk');       
        Route::get('/datatables_dmtk','dmtkController@datatables_dmtk')->name('datatables_dmtk');        
    }); 

    Route::group(['prefix' => 'nh2015'], function() {    	
        Route::get('/','nh2015Controller@index')->name('nh2015');       
        Route::get('/datatables_nh2015','nh2015Controller@datatables_nh2015')->name('datatables_nh2015');        
    }); 

    Route::group(['prefix' => 'ph2015'], function() {    	
        Route::get('/','ph2015Controller@index')->name('ph2015');       
        Route::get('/datatables_ph2015','ph2015Controller@datatables_ph2015')->name('datatables_ph2015');        
    }); 

    Route::group(['prefix' => 'tc2015'], function() {    	
        Route::get('/','tc2015Controller@index')->name('tc2015');       
        Route::get('/datatables_tc2015','tc2015Controller@datatables_tc2015')->name('datatables_tc2015');        
    }); 

    Route::group(['prefix' => 'tkhh122014'], function() {    	
        Route::get('/','tkhh122014Controller@index')->name('tkhh122014');       
        Route::get('/datatables_tkhh122014','tkhh122014Controller@datatables_tkhh122014')->name('datatables_tkhh122014');        
    }); 

    Route::group(['prefix' => 'tienmatthang1'], function() {       
        Route::get('/','TienMatThang1Controller@index')->name('tienmatthang1');       
        Route::get('/datatables_tienmatthang1','TienMatThang1Controller@datatables_tienmatthang1')->name('datatables_tienmatthang1');
    }); 

    Route::group(['prefix' => 'nganhangthang1'], function() {       
        Route::get('/','NganHangThang1Controller@index')->name('nganhangthang1');       
        Route::get('/datatables_nganhangthang1','NganHangThang1Controller@datatables_nganhangthang1')->name('datatables_nganhangthang1');
    }); 

    Route::group(['prefix' => 'thukhachhangnganhang1'], function() {       
        Route::get('/','PhaiThuCuaKhachHangNganHang1Controller@index')->name('thukhachhangnganhang1');       
        Route::get('/datatables_thukhachhangnganhang1','PhaiThuCuaKhachHangNganHang1Controller@datatables_thukhachhangnganhang1')->name('datatables_thukhachhangnganhang1');
    }); 

});