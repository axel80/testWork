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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('divColors', [
       'uses' => 'HomeController@divsColors',
        'as'   => 'divColors'
]);

Route::get('fibonacci', [
       'uses' => 'HomeController@fibonacci',
        'as'   => 'fibo'
]);

Route::get('sendMail', [
       'uses' => 'HomeController@sendMail',
        'as'   => 'send'
]);