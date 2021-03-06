<?php

use App\Http\Middleware\HelloMiddleware;

// if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
//     error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// }
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

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');

Route::get('/bbs','BbsController@index');
Route::post('/bbs/add','BbsController@add');
Route::post('/bbs/delete/{id}','BbsController@delete');
