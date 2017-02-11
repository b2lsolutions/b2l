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
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'candidate'], function () {
  Route::get('/login', 'CandidateAuth\LoginController@showLoginForm');
  Route::post('/login', 'CandidateAuth\LoginController@login');
  Route::post('/logout', 'CandidateAuth\LoginController@logout');

  Route::get('/register', 'CandidateAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'CandidateAuth\RegisterController@register');

  Route::post('/password/email', 'CandidateAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'CandidateAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'CandidateAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'CandidateAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'recruiter'], function () {
  Route::get('/login', 'RecruiterAuth\LoginController@showLoginForm');
  Route::post('/login', 'RecruiterAuth\LoginController@login');
  Route::post('/logout', 'RecruiterAuth\LoginController@logout');

  Route::get('/register', 'RecruiterAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'RecruiterAuth\RegisterController@register');

  Route::post('/password/email', 'RecruiterAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'RecruiterAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'RecruiterAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'RecruiterAuth\ResetPasswordController@showResetForm');
});

Route::resource('jobposts', 'JobpostsController');