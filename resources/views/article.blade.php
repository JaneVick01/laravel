<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="This is a home page">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bimage">
<!-- Top navigation -->
@yield('content')

<main class="generaltext">
    <div class="mytext">
        <div class="container-articles">
            <article>
                @foreach($article as $article)
                    <p class="subtitle">{{ $article->title }}</p>
                    <p> {{ $article->body }} </p>
                @endforeach
            </article>
        </div>
    </div>
</main>
</br>
<footer>
    Author: Viktória Žiaková
</footer>
</body>
