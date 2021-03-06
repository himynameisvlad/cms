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

Route::get('/', [
    'uses' => 'IndexController@getView',
    'as'   => 'index'
]);

Route::get('/cmslogin', function () {
    return view('login');
});

Route::get('/dashboard', [
    'uses' => 'DashboardController@getDashboard',
    'as'   => 'dashboard',
    'middleware' => 'guest'
]);

Route::post('/signin', [
    'uses' => 'AdminController@postSignIn',
    'as'   => 'signin'
]);

Route::post('/signup', [
    'uses' => 'AdminController@postSignUp',
    'as'   => 'signup'
]);