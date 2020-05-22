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
    return view('welcome');
});

Route::get('/livres', 'LivreController@index')->name('livre');
Route::get('/show/{id}',"LivreController@show")->name("show");
Route::get('/add', "LivreController@create")->name('add');
Route::post("/saveLivre", "LivreController@store")->name("saveLivre");
Route::get('/edit/{id}', "LivreController@edit")->name("edit");
Route::post('/update/{id}', "LivreController@update")->name("update");
Route::get("/delete/{id}", "LivreController@destroy")->name("delete");