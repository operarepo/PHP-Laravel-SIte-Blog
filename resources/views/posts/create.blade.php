<!DOCTYPE html>
<html>
<head>
    <title>Напиши свой пост и опубликуй его!</title>
</head>
<body>
    <a href="{{ route('posts.index') }}">На главную</a>
    <h1>Создать пост</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <em><h4>Введите название поста:</h4></em>
        <input type="text" name="title" required><br>
        <em><h4>Введите интро:</h4></em>
        <textarea name="intro" required></textarea><br>
        <em><h4>Введите текст:</h4></em>
        <textarea name="content" required></textarea><br>
        <button type="submit"><strong>ОПУБЛИКОВАТЬ</strong></button>
    </form>
</body>
</html>
