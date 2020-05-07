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
        @foreach($links as $value)
            <a href="">{{$value}}</a>

        @endforeach
    </header>
        <h3>{{$category}}</h3>
    <div class="news-feed">
        <ul>
            @foreach($news as $article)
                <div class="news-feed-elem" >
                    <li>{{$article['date']}} <a href="">{{$article['title']}}</a></li>
                </div>
            @endforeach
        </ul>

    </div>
</div>


</body>
</html>


<?php
