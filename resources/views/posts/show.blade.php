<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog</title>
</head>
<body>
    <div class="container">
        <h1>Publicaciones</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="panel-body">
                {{ $post->body }}
                <br>
                <a href="/">Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>