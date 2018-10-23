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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::prefix('admin')->group(function(){ 
    
    //Auth Routes
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/logout', 'Auth\LoginController@userLogout')->name('admin.logout');

    //change password
    Route::get('/changepassword', 'HomeController@showChangePasswordForm')->name('admin.changepassword');
    Route::post('/changepassword', 'HomeController@changePassword')->name('admin.changepassword');

    Route::get('/notice-title', 'TitleImageController@titleIndex')->name('admin.notice-title');
    Route::post('/notice-title', 'TitleImageController@titlePost')->name('admin.notice-title');
    Route::get('/notice-title/{id}/api', 'TitleImageController@api');
    Route::get('/notice-title/{id}/delete', 'TitleImageController@delete');
    // Route::post('/sortable/{lv}', 'TitleImageController@sortable');
    Route::get('/sortable/{lv}', 'TitleImageController@sortable');


    Route::get('/notice-image/{id}', 'NoticeImageController@noticeIndex')->name('admin.notice');
    Route::post('/notice-image/{id}', 'NoticeImageController@noticePost')->name('admin.notice');
    Route::get('/notice-image/{id}/api', 'NoticeImageController@api');
    Route::get('/notice-image/{id}/delete', 'NoticeImageController@delete');

    Route::get('/header', 'HeaderController@index')->name('admin.header');
    Route::post('/header', 'HeaderController@headerPost')->name('admin.header');
    
    Route::get('/footer', 'FooterController@index')->name('admin.footer');
    Route::post('/footer', 'FooterController@footerPost')->name('admin.footer');




});


Route::prefix('superadmin')->group(function(){ 

    //Auth Routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('superadmin.login.submit');
    Route::get('', 'AdminController@index')->name('superadmin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('superadmin.logout');

    //password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('superadmin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('superadmin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('superadmin.password.update');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('superadmin.password.reset');

    //change password
    Route::get('/changepassword', 'AdminController@showChangePasswordForm')->name('superadmin.changepassword');
    Route::post('/changepassword', 'AdminController@changePassword')->name('superadmin.changepassword');

    //City Routes
    Route::get('/city', 'CityController@index')->name('superadmin.city');
    Route::post('/city', 'CityController@post');
    Route::get('/city/{id}/delete', 'CityController@delete');
    Route::get('/city/{id}/api', 'CityController@api');

    //Admins Routes
    Route::get('/admins', 'AdminsController@index')->name('superadmin.admins');
    Route::get('/admins/{id}/delete', 'AdminsController@delete');
});

//Notice Board Routes
Route::get('/', 'NoticeBoardController@index');
Route::get('/{city}', 'NoticeBoardController@notice');


