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
        @foreach($links as $value)
            <a href="">{{$value}}</a>

        @endforeach
    </header>
    <div class="news-feed">
        @foreach($news as $article)
            <div class="news-feed-elem" >
                <p>{{$article['date']}} <a href="">{{$article['title']}}</a></p>
            </div>
        @endforeach
    </div>
</div>


</body>
</html>


<?php
