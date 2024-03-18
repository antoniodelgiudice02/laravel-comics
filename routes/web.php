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
  return view('layout.app');
})->name('home');

Route::get('characters', function () {
  return view('pages.characters');
})->name('characters');

Route::get('comics', function () {
  $comics = config('comics');
  return view('pages.comics', compact('comics'));
})->name('comics');

Route::get('movies', function () {
  return view('pages.movies');
})->name('movies');

Route::get('tv', function () {
  return view('pages.tv');
})->name('tv');