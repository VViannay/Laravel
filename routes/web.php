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
//Drinks Definition Fonctionnelle.
Route::get('/drinks', 'DrinkController@index');
Route::get('/drink/{id}', 'DrinkController@store');
Route::get('Drinks/Price', 'DrinkController@show');
Route::post('/drink/create', 'DrinkController@create');



Route::get('/ingredients', function(){
    return view('IngGesture');
});

Route::get('/Commands', function(){
   return view('Gestion-Commande');
});

Route::get('/moneyManage', function(){
    return view('moneyGesture');
});





