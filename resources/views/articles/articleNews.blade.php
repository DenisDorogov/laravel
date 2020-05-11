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
    <div class="article">
        <h2>{{$article['title']}}</h2>
        <p><i>{{date('Y-m-d H:i:s',$article['date'])}}</i></p>
        <p>{{$article['text']}}</p>
    </div>
</div>
</body>
</html>

<?php

