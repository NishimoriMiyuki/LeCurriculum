<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">投稿作成</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p><br/>
                    <a href="/posts/{{ $post->id }}/edit">編集</a>
                    <form method="post" action="/posts/{{ $post->id }}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="削除" onclick='return confirm("削除しますか？")'>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </body>