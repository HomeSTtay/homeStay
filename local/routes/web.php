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

Route::get('/form-send-mail/','MyFirstController@getMail');

Route::get('/form-change-pass/{email}','MyFirstController@getChangePass');

Route::get('/logOut','TestLogin@getLogout');

Auth::routes();

Route::post('/logintest','TestLogin@postLogin');

Route::post('/registertest', 'TestLogin@postRegister');

Route::post('/send-mail', 'TestLogin@postSendMail');

Route::post('/change-pass/{email}','TestLogin@postChangePass');
 

/* Admin */
 
Route::get('/admin','AdminController@getAdminIndex');

Route::get('/list-homestay','AdminController@getListHomestay');

Route::get('/add-homestay','AdminController@getAddHomestay');

Route::get('/list-user','AdminController@getListUser');

Route::get('/list-type-room','AdminController@getListRoom');

Route::get('/danh-sach-style-homestay','AdminController@getListStyleHomestay');

Route::get('/them-style-homestay','AdminController@getAddStyleHomestay');

Route::get('/sua-style-homestay','AdminController@getEditStyleHomestay');

Route::get('/add-type-room','AdminController@getAddRoom');

Route::get('/add-post','AdminController@getAddPost');

Route::get('/list-post','AdminController@getListPost');
