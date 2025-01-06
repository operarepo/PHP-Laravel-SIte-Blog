<!DOCTYPE html>
<html>
<head>
    <title>Мой блог</title>
</head>
<body>
    <h1>Список опубликованных постов:</h1>
    <a href="{{ route('posts.create') }}">Создать новый пост</a>
    <h2>{{ $post->title }}<br>
    {{ $post->content }}</h2>
    <button type="submit"><strong>Изменить</strong></button><br>
    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"><Strong>Удалить</Strong></button>
    </form>
</body>
</html>
