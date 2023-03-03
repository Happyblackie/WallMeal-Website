<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/list', 'App\Http\Controllers\PizzaController@list')->name('list')->middleware('auth');
Route::get('/pizzaid/{id}', 'App\Http\Controllers\PizzaController@pizzaid')->name('pizzaid')->middleware('auth');

/* C R U D */
Route::get('/create', 'App\Http\Controllers\PizzaController@create')->name('create');
Route::post('/home', 'App\Http\Controllers\PizzaController@save')->name('save');
Route::delete('/list/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('destroy')->middleware('auth');
Route::get('/edit/{id}','App\Http\Controllers\PizzaController@edit')->name('edit')->middleware('auth');
Route::put('/edit/{id}', 'App\Http\Controllers\PizzaController@update')->name('update')->middleware('auth');

//Reports
Route::get('/pizzas', 'App\Http\Controllers\PdfController@index')->name('index');

Route::get('/export', 'App\Http\Controllers\PdfController@export')->name('pdf')->middleware('auth');
Route::get('pizza/export', 'App\Http\Controllers\PizzaController@export')->name('export')->middleware('auth');

//
Route::get('/pizzaview', 'App\Http\Controllers\PizzaController@pizzaview')->name('pizzaview');

/* Route::get('/download',function(){
    $file = public_path()."/pizza1.pdf";
    $headers = array(
        'Content-Type: application/pdf',
    );
    return Response::download($file);
}); */

Route::get('/search','Appp\Http\Controllers\PizzaController@search');