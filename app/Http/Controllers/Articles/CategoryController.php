<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryNews(string $name)
    {
        return view('articles.category', [
            'links' => $this->getLinks(),
            'news' => $this->getNewsFeed($name),
            'name' => $name
        ]);
    }
}
