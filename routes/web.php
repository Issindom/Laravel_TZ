<?php
use App\Http\Controllers;

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

Route::get('/books', [Controllers\BooksController::class, 'index']);

Route::get('/books/{id}/delete', [Controllers\BooksController::class, 'delete']);
Route::get('/authors', [Controllers\AuthorsController::class, 'index']);
Route::get('/authors/{id}/delete', [Controllers\AuthorsController::class, 'delete']);