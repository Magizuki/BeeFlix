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
|s
*/

Route::get('/','MovieController@GenerateMainMenuView');

Route::get('/MainMenu/{id}/{genreID}','MovieController@GenerateDetailMovieView');

Route::get('/MainMenu/{id}','MovieController@GenerateGenreMovieView');
