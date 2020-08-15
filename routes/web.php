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
    return view('auth/login');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

//route::get('/index', 'JawabanController@index');
//route::get('/index', 'PertanyaanController@index');

route::get('/index/create', 'HomeController@create');
route::post('/index/create', 'HomeController@store');
route::get('/profile', 'PertanyaanController@profile');
route::get('/test', 'PertanyaanController@test');
route::get('/index/{id}/answer', 'HomeController@answer');
route::post('/index/answer', 'JawabanController@jawab');



//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});
