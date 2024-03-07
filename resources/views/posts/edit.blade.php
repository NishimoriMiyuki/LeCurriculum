<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf
            <p>タイトル</p>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <p style="color : red;">{{ $message }}</p>
            @enderror
            <p>本文</p>
            <textarea name="body">{{ old('body', $post->body) }}</textarea><br/>
            @error('body')
                <p style="color : red;">{{ $message }}</p>
            @enderror
            <input type="submit" value="保存">
        </form>
        <a href="/">戻る</a>
    </body>