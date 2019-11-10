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




Auth::routes();


Route::get('cvs', 'CvController@index');
Route::get('create', 'CvController@create');
Route::post('cvs', 'CvController@store');
Route::get('edit/{id}', 'CvController@edit');
Route::put('cvs/{id}', 'CvController@update');
Route::delete('delete/{id}', 'CvController@destroy');
Route::get('details/{id}','CvController@details');
Route::get('modal/{id}','CvController@delete_modal');
Route::get('delete/{id}','CvController@redirect_page');
/*Route::post('logout','\App\Http\Controllers\Auth\LoginController@redirect_page');








