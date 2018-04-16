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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','TestController@indexPage')->name('test.indexPage');

// Route::get('/detail/{id}/{cost}', function ($id,$cost) {
//     echo $id.' of cost '.$cost;
// });

Route::get('/detail/{id}', 'TestController@addUser')->name('test.addUser');
Route::post('/demoOmise', 'OmiseController@doCharge')->name('test.omisePay');
Route::get('/payment','OmiseController@paymentPage')->name('test.paymentPage');