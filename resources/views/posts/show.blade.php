<!DOCTYPE html>
<html>
<head>
    <title>Мой блог</title>
</head>
<body>
    <h1>Пост: {{ $post->title }}</h1>
    {{ $post->content }}</h2><br>
    <!-- <form action="{{ route('posts.edit', $post) }}" method="POST";> -->
        <!-- @csrf -->
        <!-- @method('PUT') -->
        <!-- <a href="{{ route('posts.edit', $post) }}">Редактировать</a> -->
        <a href="{{ route('posts.edit', $post->id) }}"><button type="button" ><strong>Изменить</strong></button><br></a>
    <!-- </form><br> -->
    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"><Strong>Удалить</Strong></button>
    </form>
    <br><br><a href="{{ route('posts.index') }}">На главную</a><br>
</body>
</html>
