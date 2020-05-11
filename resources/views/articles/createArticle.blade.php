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
        <a href="/wn/auth">Autorisation</a>
    </header>
    <div>
        <h3>Новая статья</h3>
        <form action="{{route('createArticle')}}" method="post">
            @csrf
            <label for="title">Логин</label>
            <input type="text" name="title"></br>
            <label for="text">Пароль</label>
            <input type="password" name="text"></br>
            <button type="submit">Создать статью</button>


        </form>
    </div>
    <footer>
        <p><i>&copyDenisDorogov</i></p>
    </footer>
</div>
</body>
</html>

<?php

