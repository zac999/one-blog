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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup','UsersController@create')->name('signup');
Route::resource('users','UsersController');

//显示登录页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话(登录)
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话(退出登录)
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::post('password/reset',  'PasswordController@reset')->name('password.update');
//修改密码
Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');
Route::post('password/reset',  'PasswordController@reset')->name('password.update');
