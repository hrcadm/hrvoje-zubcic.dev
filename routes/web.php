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
Route::get('hzdm', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('hzdm', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// REGISTRATION AND FORGOT PASSWORD ROUTES DISABLED
// BY DEFAULT FOR THE TIME BEING

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
Route::get('projects/brocando', function(){
    return view('web.portfolio.brocando');
})->name('project.brocando');
Route::get('projects/giftcash', function(){
    return view('web.portfolio.giftcash');
})->name('project.giftcash');
Route::get('projects/mingo', function(){
    return view('web.portfolio.mingo');
})->name('project.mingo');

// ADMIN ROUETS
Route::prefix('hrca')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('home', 'Admin\HomeController@index')->name('adminHome');

    // BLOG ROUTES
    Route::prefix('posts')->group(function () {
        Route::get('all', 'Admin\PostController@index')->name('adminAllPosts');
        Route::get('new', 'Admin\PostController@create')->name('adminNewPost');
        Route::get('edit/{id}', 'Admin\PostController@edit')->name('adminEditPost');
        Route::get('show/{id}', 'Admin\PostController@show')->name('adminShowPost');

        Route::post('store', 'Admin\PostController@store')->name('adminStorePost');
        Route::put('update/{id}', 'Admin\PostController@update')->name('adminUpdatePost');
        Route::delete('delete/{id}', 'Admin\PostController@destroy')->name('adminDeletePost');
    });

    // PROJECTS ROUTES
    Route::prefix('projects')->group(function () {
        Route::get('all', 'Admin\ProjectController@index')->name('adminAllProjects');
        Route::get('new', 'Admin\ProjectController@create')->name('adminNewProject');
        Route::get('edit/{id}', 'Admin\ProjectController@edit')->name('adminEditProject');
        Route::get('show/{id}', 'Admin\ProjectController@show')->name('adminShowProject');

        Route::post('store', 'Admin\ProjectController@store')->name('adminStoreProject');
        Route::put('update/{id}', 'Admin\ProjectController@update')->name('adminUpdateProject');
        Route::delete('delete/{id}', 'Admin\ProjectController@destroy')->name('adminDeleteProject');
    });

    // TESTIMONIALS ROUTES
    Route::prefix('testimonials')->group(function () {
        Route::get('all', 'Admin\TestimonialController@index')->name('adminAllTestimonials');
        Route::get('new', 'Admin\TestimonialController@create')->name('adminNewTestimonial');
        Route::get('edit/{id}', 'Admin\TestimonialController@edit')->name('adminEditTestimonial');
        Route::get('show/{id}', 'Admin\TestimonialController@show')->name('adminShowTestimonial');

        Route::post('store', 'Admin\TestimonialController@store')->name('adminStoreTestimonial');
        Route::put('update/{id}', 'Admin\TestimonialController@update')->name('adminUpdateTestimonial');
        Route::delete('delete/{id}', 'Admin\TestimonialController@destroy')->name('adminDeleteTestimonial');
    });

    // Contact form submissions listings
    Route::get('contact-form-submissions', 'Admin\ContactFormController@showAllFormSubmissions')->name('adminAllContactFormSubmissions');
    Route::get('contact-form-submission/{id}', 'Admin\ContactFormController@showInstance')->name('adminShowContactFormSubmission');

    // Subscribers listings
    Route::get('all-subscriptions', 'Admin\SubscriptionController@showAllSubscriptions')->name('adminAllSubscriptions');
});
