    @extends('layouts.main')
    @section('content')
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
    @endsection
