<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');





//Routes For Admin






//Routes For Users
Route::namespace('Appoint')->group(function(){
    // Front Page
    Route::get('/','IndexController@index');
    
    Route::match(['get','post'],'/submit-appointment','IndexController@submitApp');
    
});

























