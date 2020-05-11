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
    Route::get('/article/{num}', 'Articles\ArticleController@veiwArticle')
        ->name('articleWN');
    Route::get('/auth', 'Articles\AuthController@Auth')
        ->name('auth');
    Route::post('/auth', 'Articles\AuthController@checkUser')
        ->name('check');
    Route::group(['prefix' => 'cms'], function() {
        Route::get('/create-article', 'Articles\CreateArticleController@creatingArticle')
            ->name('createArticle');
        Route::post('/create-article', 'Articles\CreateArticleController@creatingArticleData')
            ->name('createArticle');
    });
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
