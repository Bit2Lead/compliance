<?php

use Illuminate\Support\Facades\Route;

//Route::get('/test', [App\Http\Controllers\FrontendsController::class, 'test']);

Route::get('/', [App\Http\Controllers\FrontendsController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontendsController::class, 'about'])->name('about');
Route::get('/company-profile', [App\Http\Controllers\FrontendsController::class, 'company_profile'])->name('company_profile');

Route::get('/at-a-glance', [App\Http\Controllers\FrontendsController::class, 'at_a_glance'])->name('at_a_glance');
Route::get('/our-location', [App\Http\Controllers\FrontendsController::class, 'our_location'])->name('our_location');
Route::get('/message-from-md', [App\Http\Controllers\FrontendsController::class, 'md_message'])->name('md_message');


Route::get('/books', [App\Http\Controllers\FrontendsController::class, 'books'])->name('books');
Route::get('/book/{id}', [App\Http\Controllers\FrontendsController::class, 'single_book'])->name('single_book');
Route::get('/order-book/{id}', [App\Http\Controllers\FrontendsController::class, 'order_book'])->name('order_book');
Route::post('/order', [App\Http\Controllers\FrontendsController::class, 'order'])->name('order');


Route::get('/my-profile', [App\Http\Controllers\FrontendsController::class, 'my_profile'])->name('my_profile');
Route::get('/job-seekers', [App\Http\Controllers\FrontendsController::class, 'job_seekers'])->name('job_seekers');
Route::get('/consultancy', [App\Http\Controllers\FrontendsController::class, 'consultancy'])->name('consultancy');




Route::get('/trainings', [App\Http\Controllers\FrontendsController::class, 'trainings'])->name('trainings');

Route::get('/category/{slug}', [App\Http\Controllers\FrontendsController::class, 'training_on_category'])->name('training_on_category');

Route::get('/training/{id}', [App\Http\Controllers\FrontendsController::class, 'single_training'])->name('single_training');
Route::get('/contact', [App\Http\Controllers\FrontendsController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\FrontendsController::class, 'contact_submit'])->name('contact_submit');
Route::get('/join-training/{id}', [App\Http\Controllers\FrontendsController::class, 'join_training'])->name('join_training');
Route::post('/join-training-submit', [App\Http\Controllers\FrontendsController::class, 'join_training_submit'])->name('join_training_submit');


/*email*/
Route::post('/email-to-friend', [App\Http\Controllers\FrontendsController::class, 'email_to_friend'])->name('email_to_friend');
Route::post('/email-book-to-friend', [App\Http\Controllers\FrontendsController::class, 'email_book'])->name('email_book');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
