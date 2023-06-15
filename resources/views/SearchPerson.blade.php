<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>
            <h3>人物検索結果</h3>
            @foreach($users as $user)
            <div>
                <p>{{ $user->name }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>