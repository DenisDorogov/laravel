<?php //D:\code\laravel\routes\web.php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function() {
    Route::get('/articles.html', 'Articles\IndexController@listArticles')
        ->name('articles');
    Route::get('/article/{id}.html', 'Articles\IndexController@getArticle')
        ->name('article');
    Route::post('/articles.html', 'Articles\IndexController@saveArticle')
        ->name('articles'); // Такое же имя допустимо, так как другой метод.
});


//Создал отдельную группу для своего сайта новостей
Route::group(['prefix' => 'wn'], function() {
    Route::get('/main', 'Articles\MainController@mainPage');
    Route::get('category/{name}', 'Articles\CategoryController@getCategoryNews')
        ->name('category');


});



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
