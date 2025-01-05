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
            <h1><li>{{ $post->title }}</li></h1>
            <p>{{ $post->content }}</p>
        @endforeach
    </ul>
</body>
</html>
