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
            <a href="{{route('category', ['name' => $value] )}}">{{$value}}</a>

        @endforeach
        <a href="/wn/autorisation">Autorisation</a>
{{--        @foreach($articles as $key => $value)--}}
{{--            <p><a href="{{route('article', ['id' => $key])}}">{{$key}} - {{$value}}</a></p>--}}
{{--            --}}{{-- <?php echo $key ?> эквивалент {{}} --}}
{{--            --}}{{-- @php @endphp вместо тегов php--}}
{{--        @endforeach--}}
    </header>
    <div>
        <h3>Это новый новостной сайт.</br> Только хорошие новости!</h3>
    </div>
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
