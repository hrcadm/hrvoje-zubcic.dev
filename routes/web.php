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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/*Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
/*Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/

Route::get('/', 'PagesController@landingPage')->name('home');
Route::get('about-me', 'PagesController@aboutMe')->name('about-me');
Route::get('portfolio', 'PagesController@portfolio')->name('portfolio');
Route::get('blog', 'PagesController@blog')->name('blog.index');
Route::get('contact', 'PagesController@contact')->name('contact');

Route::post('subscribe-us', 'SubscriptionController@subscribe')->name('subscribe-us');
Route::post('contact-form-request', 'ContactFormController@contactFormSubmission')->name('contact-form-request');

// Static routes for the projects for now
Route::get('projects/brocando', 'ProjectController@brocando')->name('project.brocando');
Route::get('projects/giftcash', 'ProjectController@giftcash')->name('project.giftcash');
Route::get('projects/mingo', 'ProjectController@mingo')->name('project.mingo');

Route::prefix('hrca')->middleware('auth')->group(function () {
    Route::get('home', 'Admin\HomeController@index')->name('adminHome');

    Route::prefix('posts')->group(function () {
        Route::get('all', 'Admin\PostController@showAllPosts')->name('adminAllPosts');
        Route::get('new', 'Admin\PostController@newPost')->name('adminNewPost');
    });

    Route::prefix('projects')->group(function () {
        Route::get('all', 'Admin\ProjectController@showAllProjects')->name('adminAllProjects');
        Route::get('new', 'Admin\ProjectController@newProject')->name('adminNewProject');
    });

    Route::prefix('testimonials')->group(function () {
        Route::get('all', 'Admin\TestimonialController@index')->name('adminAllTestimonials');
        Route::get('new', 'Admin\TestimonialController@create')->name('adminNewTestimonial');
        Route::get('edit/{id}', 'Admin\TestimonialController@edit')->name('adminEditTestimonial');
        Route::get('show/{id}', 'Admin\TestimonialController@show')->name('adminShowTestimonial');

        Route::put('update/{id}', 'Admin\TestimonialController@update')->name('adminUpdateTestimonial');
        Route::post('store', 'Admin\TestimonialController@store')->name('adminStoreTestimonial');
        Route::delete('delete/{id}', 'Admin\TestimonialController@destroy')->name('adminDeleteTestimonial');
    });

    Route::get('contact-form-submissions', 'Admin\ContactFormController@showAllFormSubmissions')->name('adminAllContactFormSubmissions');

    Route::get('all-subscriptions', 'Admin\SubscriptionController@showAllSubscriptions')->name('adminAllSubscriptions');
});
