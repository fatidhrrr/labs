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

// Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

// Route des blades templates

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/service', 'ServiceController@index')->name('service');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contact', 'ContactController@indexview')->name('contact');

// Logo 

Route::resource('logo', 'LogoController');
Route::get('/logo', 'LogoController@index')->name('logo.index');

// Carousel

Route::resource('carousel', 'CarouselController');
Route::get('/carousel', 'CarouselController@index')->name('carousel.index');

// Card 

Route::resource('card', 'CardController');

// Para

Route::resource('para', 'ParaController');

// Video

Route::resource('video', 'VideoController');

// Testimonial

Route::get('testimonial', 'TestimonialController@index')->name('testimonial.index');
Route::get('testimonial/create', 'TestimonialController@create')->name('testimonial.create');
Route::post('testimonial', 'TestimonialController@store')->name('testimonial.store');
Route::get('testimonial/{id} ', 'TestimonialController@edit')->name('testimonial.edit');
Route::delete('testimonial/{id} ', 'TestimonialController@destroy')->name('testimonial.destroy');
Route::put('testimonial/{id} ', 'TestimonialController@update')->name('testimonial.update');

// Team



// Promotion 

Route::resource('promotion', 'PromotionController');
Route::get('/promotion', 'PromotionController@index')->name('promotion.index');

// Contact

Route::resource('contactindex', 'ContactController');
// Route::get('/contactindex', 'ContactController@create')->name('contact.index');


// Contact Us

Route::resource('contactus', 'ContactusController');