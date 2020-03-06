<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function()
{
return '<h1>Laravel</h1>';   
});

Route::get('/livros', 'BookController@listarLivros');

Route::get('/cadastrarlivros', 'BookController@listarLivros');

Route::get('/editarLivros', 'BookController@listarLivros');

Route::get('/deletarLivros', 'BookController@listarLivros');

Route::get('/verificarLivro', 'BookController@listarLivros');
