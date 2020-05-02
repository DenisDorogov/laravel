<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список статей</title>
</head>
<body>
    <div class="list-articles">
        @foreach($articles as $key => $value)
            <p><a href="{{route('article', ['id' => $key])}}">{{$key}} - {{$value}}</a></p>
            {{-- <?php echo $key ?> эквивалент {{}} --}}
            {{-- @php @endphp вместо тегов php--}}
        @endforeach
    </div>
    <br>
    <div>
        <form action="{{route('articles')}}" method="post">
            @csrf
            <input type="text" name="article"><button type="submit">OK</button>
        </form>
    </div>

</body>
</html>


<?php
    //В названии blade - шаблонизатор
