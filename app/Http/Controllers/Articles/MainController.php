<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $categoies = [];

    public function  __construct()
    {
        $this->categoies = $this->getCategory();
    }



    public function mainPage() {
        $links = array_unshift($categories, 'main');
        return view('articles.main', $links);
    }

}
