<?php

use Illuminate\Support\Facades\Route;



Route::get('/articles.html', 'Articles\IndexController@listArticles');
Route::get('/article/{id}.html', 'Articles\IndexController@getArticle')->name('article');
// ->name() называем наш роут определённым именем, что-бы вызвать во вьюшке



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

//Route::get('/', function () {
//    return view('welcome');
//});
