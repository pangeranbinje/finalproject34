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
    return view('layouts/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route::get('/index', 'JawabanController@index');
route::get('/index', 'PertanyaanController@index');

route::get('/index/create', 'PertanyaanController@create');
route::post('/index/create', 'PertanyaanController@store');
route::get('/profile', 'PertanyaanController@profile');
route::get('/index/{id}/answer', 'PertanyaanController@answer');
route::post('/index/answer', 'JawabanController@store');



//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});
