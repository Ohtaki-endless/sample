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
            <h3>人物検索</h3>
            <form action="/search/person" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" placeholder="名前">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
        </div>
        <div>
            <h3>プロジェクト検索</h3>
            <form action="/search/project" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" placeholder="プロジェクト名">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
        </div>
    </body>
</html>