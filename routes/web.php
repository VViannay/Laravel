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



Route::get('/', function(){
    return view('HomePage');
});

Route::get('/drinks', 'DrinkController@afficherBoisson');


Route::get('/ingredients', function(){
    return view('ingGesture');
});

Route::get('/Commands', function(){
   return view('CommandGesture');
});

Route::get('/moneyManage', function(){
    return view('moneyGesture');
});
