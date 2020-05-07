<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
//    protected $categoies = [];

    protected $newsFeed = [];

    public function  __construct()
    {
        //$this->categoies = $this->getCategory();
    }



    public function mainPage() {
        $this->getNewsFeed();
//        dd($this->getLinks());
        return view('articles.main', [
            'links' => $this->getLinks(),
            'news' => $this->newsFeed
        ]);
    }

    public function getNewsFeed() {
        foreach ($this->news as $category => $arrayArticles) {
            foreach ($arrayArticles as $article) {
                $this->newsFeed[] = $article;
            }
        }
        //var_dump($this->newsFeed);
        //asort($this->newsFeed[]['date']); //TODO https://www.php.net/manual/ru/function.usort.php
        //var_dump($this->newsFeed);
        return $this->newsFeed;
    }

}
