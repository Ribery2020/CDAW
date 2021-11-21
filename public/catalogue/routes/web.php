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

Route::get('test/{prenom}', function ($prenom) {
    return view('leNomDeLaVue', ['prenom' => $prenom]);
})->where('prenom', '[A-Za-z]+') ->name('route');


Route::get('listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');
Route::get('listeMedias2/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMedias2');
Route::get('users/add', 'App\Http\controllers\UserController@add');
Route::get('users/select', 'App\Http\controllers\UserController@select');


Route::get('show/all', 'App\Http\controllers\ShowFilmsController@showAllFilms');
Route::post('/addFilm', 'App\Http\controllers\ShowFilmsController@addFilm');
Route::post('/updateFilm', 'App\Http\controllers\ShowFilmsController@updateFilm');
Route::post('/deleteFilm', 'App\Http\controllers\ShowFilmsController@deleteFilm');

