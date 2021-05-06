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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@details')->name('blog_details');

Route::get('/login', 'AuthenticationController@index_login')->name('login');
Route::get('/register', 'AuthenticationController@index_register')->name('register');
Route::get('/logout', 'AuthenticationController@logout')->name('logout');


Route::post('/signup', 'AuthenticationController@register')->name('signup');
Route::post('/connexion', 'AuthenticationController@login')->name('connexion');
Route::post('/verify_email_reset_pwd', 'AuthenticationController@verifyEmailResetPwd')->name('verify_email_reset_pwd');
Route::post('/reset_pwd', 'AuthenticationController@ResetPassword')->name('reset_pwd');
Route::get('/activate-user/{id}', 'AuthenticationController@activate_user')->name('activate_user');
Route::get('/reset-password/{id}', 'AuthenticationController@viewResetPassword')->name('viewResetPwd'); 


Route::post('/contact_form', 'ContactController@ContactUs')->name('contact_form');

Route::post('/comment_blog', 'BlogController@Comment')->name('comment_blog');

Route::get('/test-email', function(){
    Mail::send('email',
    array(
       'name' => 'BURName',
       'email' => 'stephane@smartcodegroup.com',
       'bodyMessage' => 'This is just a test'
    ), function($message)
    {
        $message->from("drthugsteph@gmail.com","BURN");
        $message->to('stephane@smartcodegroup.com', "BURNTEST")->subject('Email testing');
    });
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
