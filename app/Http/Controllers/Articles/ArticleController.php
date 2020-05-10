<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function veiwArticle(string $cat, int $num)
    {
//        dd($this->getLinks());
        return view('articles.articleNews', [
            'links' => $this->getLinks(),
            'article' => $this->getArticle($cat, $num)
        ]);
    }
}
