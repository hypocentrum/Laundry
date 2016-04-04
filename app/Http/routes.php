<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('layouts.app');
    });
    
	Route::model('barangs', 'Barang');
	Route::bind('barangs', function($value, $route) {
		return App\Barang::where('id', $value)->first();
		//return App\barang::where('id', $value)->first();
		//return App\Barang::all();
		//return null;
	});
    Route::resource('barangs', 'BarangController');
});
