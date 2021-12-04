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

Route::get('/',function(){return view('welcome');});


// Route::get('listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');
Route::get('listeMedias',function(){
    return view('listeMedias');
});

Route::get('listeMedias/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMediasTypeAnnee');
Route::get('users/add', 'App\Http\controllers\UserController@add');
Route::get('users/select', 'App\Http\controllers\UserController@select');


Route::get('show/all', 'App\Http\controllers\ShowFilmsController@showAllFilms');
Route::get('/addFilm', 'App\Http\controllers\ShowFilmsController@addFilm');
Route::post('/updateFilm', 'App\Http\controllers\ShowFilmsController@updateFilm');
Route::post('/deleteFilm', 'App\Http\controllers\ShowFilmsController@deleteFilm');

Route::post('/addComment', 'App\Http\controllers\CommentController@create_comment');
Route::post('/addToWatchlist', 'App\Http\controllers\listeMediasController@add_to_WatchList');
Route::post('/addTolist', 'App\Http\controllers\listeMediasController@add_to_list');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('films/{imdb_id}', function ($imdb_id) {
    return view('films', ['imdb_id' => $imdb_id]);
});





Route::middleware(['auth:sanctum', 'verified'])->get('/casino', function () {
    return view('casino');
})->name('casino');

Route::middleware(['auth:sanctum', 'verified'])->get('/Notime', function () {
    return view('Notime');
})->name('Notime');

Route::middleware(['auth:sanctum', 'verified'])->get('/Quantum', function () {
    return view('Quantum');
})->name('Quantum');

Route::middleware(['auth:sanctum', 'verified'])->get('/Skyfall', function () {
    return view('Skyfall');
})->name('Skyfall');

Route::middleware(['auth:sanctum', 'verified'])->get('/Spectre', function () {
    return view('Spectre');
})->name('Spectre');

Route::get('/database', function () {
    return view('database');
});
