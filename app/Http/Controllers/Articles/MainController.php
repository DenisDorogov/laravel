<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function mainPage() {
        $this->getNewsFeed();
        return view('articles.main', [
            'links' => $this->getLinks(),
            'news' => $this->newsFeed
        ]);
    }



}
