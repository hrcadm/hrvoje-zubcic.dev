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

Route::prefix('hrca')->group(function () {
    Route::get('home', 'Admin\HomeController@index')->name('adminHome');

    Route::get('all-posts', 'Admin\PostController@showAllPosts')->name('adminAllPosts');
    Route::get('new-post', 'Admin\PostController@newPost')->name('adminNewPost');

    Route::get('all-projects', 'Admin\ProjectController@showAllProjects')->name('adminAllProjects');
    Route::get('new-project', 'Admin\ProjectController@newProject')->name('adminNewProject');

    Route::get('all-testimonials', 'Admin\TestimonialController@showAllTestimonials')->name('adminAllTestimonials');
    Route::get('new-testimonial', 'Admin\TestimonialController@newTestimonial')->name('adminNewTestimonial');

    Route::get('contact-form-submissions', 'Admin\ContactFormController@showAllFormSubmissions')->name('adminAllContactFormSubmissions');

    Route::get('all-subscriptions', 'Admin\SubscriptionController@showAllSubscriptions')->name('adminAllSubscriptions');
});
