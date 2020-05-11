<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateArticleController extends Controller
{
    public function creatingArticle() {
        return view('articles/createArticle', [
            'links' => $this->getLinks()
        ]);
    }

    public function creatingArticleData(Request $request) {

        dd($request->all());
        //TODO Реализовать запись в БД
    }
}
