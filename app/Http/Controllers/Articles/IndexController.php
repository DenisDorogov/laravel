<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function listArticles()
    {
        $articles = [
            'Первая статья',
            'Вторая статья',
            'Третья статья'
        ];

        return view('articles.listArticles');
        //Указание к папке и файлу вьюхи
    }
}
