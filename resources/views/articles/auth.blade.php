<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World News</title>
</head>
<body>
<div class="container">
    <header>
        <h1>World News</h1>
        <a href="/wn/main">Main</a>
        @foreach($links as $key => $value)
            <a href="{{route('category', ['name' => $value] )}}"> {{$value}} </a>
        @endforeach
        <a href="/wn/autorisation">Autorisation</a>
    </header>
    <div>
        <h3>Это новый новостной сайт.</br> Только хорошие новости!</h3>
    </div>
    <div class="authentification">
        <form action="{{route('check')}}" method="post">
            @csrf
            <label for="login">Логин</label>
            <input type="text" name="login"></br>
            <label for="password">Пароль</label>
            <input type="password" name="password"></br>
            <label for="remember">Запомнить меня?</label>
            <input type="checkbox" name="remember"></br>
            <button type="submit">Войти</button>


        </form>
{{--    <li>{{date('Y-m-d H:i:s',$article['date'])}} <a href="{{route('articleWN', [ 'num' => $article['id']] )}}">{{$article['title']}}</a></li>--}}
    </div>
    <br>
    <a href="{{route('createArticle')}}">Создание статьи после авторизации админа</a>
    <footer>
        <p><i>&copyDenisDorogov</i></p>
    </footer>
</div>


</body>
</html>


<?php

