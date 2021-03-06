<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $articles = [];

    public function __construct()
    {
        $this->articles = [
            'Первая статья',
            'Вторая статья',
            'Третья статья'
        ];
    }
    public function listArticles()
    {
        return view('articles.listArticles', [
            'articles' => $this->articles

        ]);
    }

    public function getArticle(int $id)
    {
        if (!isset($this->articles[$id])) {
            return abort (404);
        }
         return view('articles.article', [
            'article' => $this->articles[$id]

        ]);
    }

    public function saveArticle(Request $request) {
        //dd($request->all()); - смотрим что пришло в request
        $all = $request->all();
        $article = $all['article'];
        $this->articles[] = $article; // Добавляем новую статью
        return redirect()->route('articles'); // перенаправляем обратно на роут.
    }


}
