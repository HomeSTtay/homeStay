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

Route::get('/detail','MyFirstController@getDetail');

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

Route::get('/edit-homestay','AdminController@getEditHomestay');

Route::get('/list-style-homestay','AdminController@getListStyleHomestay');

Route::get('/add-style-homestay','AdminController@getAddStyleHomestay');

Route::get('/edit-style-homestay','AdminController@getEditStyleHomestay');

Route::get('/form-add-style-homestay','AdminController@getAddStyleHomestay');

Route::get('/delete-style/{id}','AdminController@getDeleteStyleHomestay');

Route::get('/list-type-room','AdminController@getListRoom');

Route::get('/add-type-room','AdminController@getAddRoom');

Route::get('/edit-type-room','AdminController@getEditRoom');

Route::post ('add-type-room','AdminController@postCheckAddRoom');

Route::get ('delete-type-room/id={id}','AdminController@getCheckDeleteRoom');

Route::get('/add-post','AdminController@getAddPost');

Route::get('/list-post','AdminController@getListPost');

Route::get('/edit-post','AdminController@getEditPost');

Route::get('/list-user','AdminController@getListUser');

