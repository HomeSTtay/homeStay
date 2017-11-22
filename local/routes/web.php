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

Route::get('/','MyFirstController@getIndex');

Route::get('/signUp','MyFirstController@getSignup');

Route::get('/logIn','MyFirstController@getLogin');

Route::get('/detail', 'MyFirstController@getDetail');

Route::get('/thay-doi-mat-khau','MyFirstController@getChangePass');

Auth::routes();

Route::post('/logintest','TestLogin@postLogin');

Route::post('/registertest', 'TestLogin@postRegister');
 

/* Admin */
 
Route::get('/admin','AdminController@getAdminIndex');

Route::get('/danh-sach-homestay','AdminController@getListHomestay');

Route::get('/them-homestay','AdminController@getAddHomestay');

Route::get('/danh-sach-nguoi-dung','AdminController@getListUser');

Route::get('/danh-sach-loai-phong','AdminController@getListRoom');

Route::get('/them-loai-phong','AdminController@getAddRoom');