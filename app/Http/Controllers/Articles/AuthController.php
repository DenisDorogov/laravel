<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth()
    {
        return view('articles/auth', [
            'links' => $this->getLinks()
        ]);
    }

    public function checkUser(Request $request)
    {
        $data = $request->all();
        $login = $data['login'];
        $pass = $data['password'];
        $data['remember'] == 'on' ? $remember = true : $remember = false;
        dd($data);
        //TODO Реализовать запись в БД
    }
}
