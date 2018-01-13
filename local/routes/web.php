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

// Đăng nhập, đăng kí,đăng xuất

Route::get('/logIn','MyFirstController@getLogin');

Route::post('/logintest','TestLogin@postLogin');

Route::get('/signUp','MyFirstController@getSignup');

Route::post('/registertest', 'TestLogin@postRegister');

Route::get('/logOut','TestLogin@getLogout');

//Đăng nhập tk FB
Route::get('/redirect', 'TestLogin@reDirect');

Route::get('/callback', 'TestLogin@callBack');

//Chi tiết homestay:

//Route::get('/chi-tiet-homestay-{name}','MyFirstController@getDetailHomestay');

Route::get('/detail-{name}','MyFirstController@getDetail');

//Mail

Route::get('/form-send-mail','MyFirstController@getMail');


Route::post('/send-mail', 'TestLogin@postSendMail');

//Change pass:
Route::group(['middleware' => 'CheckChangePass'], function () {
    Route::get('/form-change-pass/{email}/{r1}','MyFirstController@getChangePass');
});


Route::post('/change-pass/{email}','TestLogin@postChangePass');

//List Homestay theo miền
Route::get('/danh-sach-homestay-mien-bac','MyFirstController@getListHomestayNorthern');

Route::get('/danh-sach-homestay-mien-trung','MyFirstController@getListHomestayCentral');

Route::get('/danh-sach-homestay-mien-nam','MyFirstController@getListHomestaySouth');



Auth::routes();


 


/* Admin */
 
// Route::get('/admin','AdminController@getAdminIndex');
Route::group(['middleware' => 'CheckAdmin'], function () {
    Route::get('/admin','AdminController@getAdminIndex');
});
//Style homestay: 

Route::get('/list-style-homestay','Admin_stylehomestayController@getListStyleHomestay');

Route::post('/add-style-homestay','Admin_stylehomestayController@postAddStyleHomestay');

Route::get('/form-add-style-homestay','Admin_stylehomestayController@getAddStyleHomestay');

Route::post('/edit-style-homestay','Admin_stylehomestayController@postEditStyleHomestay');

Route::get('/form-edit-style-homestay/{id}','Admin_stylehomestayController@getEditStyleHomestay');

Route::get('/delete-style/{id}','Admin_stylehomestayController@getDeleteStyleHomestay');

// Homestay:
Route::get('/list-homestay','AdminController@getListHomestay');

Route::get('/add-homestay','AdminController@getAddHomestay');

Route::get('/edit-homestay','AdminController@getEditHomestay');

Route::get('/delete-homestay/{id}','AdminController@getDeleteHomestay');

Route::post('add-homestay','AdminController@postAddHomestay');

Route::get('/detail-homestay/{id}','AdminController@getDetailHomestay');

//Room
Route::get('/list-type-room','Admin_typeroomController@getListRoom');

Route::get('/add-type-room','Admin_typeroomController@getAddRoom');

Route::post ('add-type-room','Admin_typeroomController@postCheckAddRoom');

Route::get('/edit-type-room/id={id}','Admin_typeroomController@getEditRoom');

Route::get('/view-type-room/id={id}','Admin_typeroomController@getViewTypeRoom');

Route::post ('edit-type-room','Admin_typeroomController@postCheckEditRoom');

Route::get ('delete-type-room/id={id}','Admin_typeroomController@getCheckDeleteRoom');

//Post

Route::get('/add-post','Admin_postController@getAddPost');

Route::post('add-post','Admin_postController@postAddPost');

Route::get('/list-post','Admin_postController@getListPost');

Route::get('edit-post/{id}','Admin_postController@getEditPost');

Route::post('/edit-post','Admin_postController@postEditPost');

Route::get('/delete-post/{id}','Admin_postController@getDeletePost');

// Route::get('post/{id}/click', 'Admin_postController@clickPost');

//User

Route::get('/list-user','Admin_userController@getListUser');

Route::get('/delete-user/id={id}','Admin_userController@getDeleteUser');






