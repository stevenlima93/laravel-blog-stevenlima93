<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>{{$title}}</h2>
    @foreach($articles as $article)
            <hr>
                <a href="/article/{{$article->id}}">
                    <h2>{{$article->title}}</h2>
                </a>
            <a href="/users/{{$article->user->id}}">
                <h3><span class="glyphicon glyphicon-user"></span> {{$article->user->name}}</h3>
            </a>
            <a href="/categories/{{$article->category->id}}" class="label label-success" >{{$article->category->title}}</a>
                <br><br>
                <p>{{$article->summary}}</p>
               <br><br>
    @endforeach
    </div>
</body>
</html>
