<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $categoies = [];
    protected $links = [];

    public function  __construct()
    {
        $this->categoies = $this->getCategory();
        $this->links = array_unshift($categories, 'main');
    }



    public function mainPage() {
        return view('articles.main', $links);
    }

}
