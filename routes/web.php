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
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
//ログイン画面
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

//新規ユーザー作成画面
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

//登録完了画面
Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ
//メインメニュー
Route::get('/top','PostsController@index');

//プロフィール画面
Route::get('/profile','UsersController@profile');

//ユーザー検索画面
Route::get('/search','UsersController@search');

//フォロー＆フォロワー表示画面
Route::get('/followList','FollowsController@followList');
Route::get('/followerList','FollowsController@followerList');

//ログアウト（ログイン画面に戻る）
Route::get('/logout', 'Auth\LoginController@logout');