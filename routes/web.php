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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return '彭胤瑜 D1044182061';
});

Route::get('/teachers','TeachersController@index');

Route::get('/teachers/{id}',function($id){

},'TeachersController@');


Route::get('foo',function()
{
	return 'Bar';
});

Route::get('articles','ArticlesController@index');


?>