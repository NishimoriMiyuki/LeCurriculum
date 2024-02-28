<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="/">ブログ投稿一覧画面に戻る</a>
        <div class='post'>
            <h1 class='title'>{{ $post->title }}</h1>
            <p class='body'>{{ $post->body }}</p>
        </div>
    </body>