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

Route::get('/', function () {
    return redirect('home');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{     
     Route::get('/home', 'PagesController@index')->name('pages.index');
    Route::get('/widgets', 'PagesController@widgets')->name('pages.widgets');
    Route::get('/login', 'PagesController@login')->name('pages.login');

});
