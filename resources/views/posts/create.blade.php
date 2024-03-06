<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="">
            <p>タイトル</p>
            <input type="text" name="title">
            <p>本文</p>
            <textarea name="body"></textarea><br/>
            <input type="submit" value="保存">
        </form>
        <a href="/">戻る</a>
    </body>