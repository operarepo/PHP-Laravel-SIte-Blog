<!DOCTYPE html>
<html>
<head>
    <title>Мой блог</title>
</head>
<body>
    <h1>Список опубликованных постов:</h1>
    <a href="{{ route('posts.create') }}">Создать новый пост</a>
    <ul>
        @foreach ($posts as $post)
            <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}<br>{{ $post->intro }}</a></h2>
        @endforeach
    </ul>
</body>
</html>
