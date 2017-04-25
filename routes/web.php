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
Route::get('/', 'HomeController@index');

Route::post('/', 'HomeController@store');

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // Show login form if unauthenticated
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    // Reset Password and email password routes
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    // Registration routes
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    // Home page for Admissions
    Route::get('home', 'HomeController@index');
    // Form routes
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::post('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
    // Campaign Routes
    Route::get('/campaigns', 'CampaignController@index');
    // Interaction Routes
    Route::get('/interactions', 'InteractionController@index');
    // Manage Users Routes
    Route::get('/manage', 'ManageController@index');
    // Task Routes
    Route::get('/tasks', 'TaskController@index');
    
});

Route::group(['namespace' => 'Admission', 'prefix' => 'admission'], function () {
    // Show login form if unauthenticated
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    // Reset Password and email password routes
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    // Registration routes
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    // Home page for Admissions
    Route::get('home', 'HomeController@index');
    // Form routes
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::post('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
    // Campaign Routes
    Route::get('/campaigns', 'CampaignController@index');
    // Interaction Routes
    Route::get('/interactions', 'InteractionController@index');
    // Task Routes
    Route::get('/tasks', 'TaskController@index');
});

Route::group(['namespace' => 'Studentworker', 'prefix' => 'studentworker'], function () {
    // Show login form if unauthenticated
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    // Reset Password and email password routes
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    // Registration routes
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    // Home page for Admissions
    Route::get('home', 'HomeController@index');
    // Form routes
    Route::get('/form', 'FormController@index');
    Route::get('/form/create', 'FormController@create');
    Route::get('/form/{username}/edit', 'FormController@edit');
    Route::post('/form/{username}', 'FormController@show');
    Route::post('/form', 'FormController@store');
    // Campaign Routes
    Route::get('/campaigns', 'CampaignController@index');
    // Interaction Routes
    Route::get('/interactions', 'InteractionController@index');
    // Task Routes
    Route::get('/tasks', 'TaskController@index');
});