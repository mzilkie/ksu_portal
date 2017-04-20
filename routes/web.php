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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/form', 'FormController@index');
Route::get('/form/create', 'FormController@create');
Route::get('/form/{username}/edit', 'FormController@edit');
Route::post('/form/{username}', 'FormController@show');
Route::post('/form', 'FormController@store');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::get('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
    Route::post('/form/{username}', 'FormController@update');
    
});

Route::group(['namespace' => 'Admission', 'prefix' => 'admission'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::post('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
});

Route::group(['namespace' => 'Studentworker', 'prefix' => 'studentworker'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::post('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
});