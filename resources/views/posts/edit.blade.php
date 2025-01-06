<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать пост</title>
</head>
<body>
    <h1>Редактировать пост</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Название:</label>
        <input type="text" name="title" value="{{ $post->title }}" required><br>
        <label>Интро:</label>
        <textarea type="text" name="intro" value="{{ $post->intro }}" required></textarea><br>
        <label>Текст:</label>
        <textarea name="content" required>{{ $post->content }}</textarea><br>
        <button type="submit"><strong>Обновить</strong></button>
    </form>
    <a href="{{ route('posts.index') }}">Назад к списку постов</a>
</body>
</html>
