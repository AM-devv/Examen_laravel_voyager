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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/portfolio', function() {
    return view ('portfolio');
})->name('portfolio');


Route::get('/blog', function(){
    return view ('blog');
})->name('blog');


Route::get('/contact', function(){
    return view ('contact');
})->name('contact');


Route::get('/works/{id}/{title}', [App\Http\Controllers\WorksController::class, 'show'])->name('detail');


Route::get('/ajax/older-works', [App\Http\Controllers\WorksController::class, 'ajaxOlders'])->name('ajaxOlderworks');