<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bimage">
<!-- Top navigation -->
<div class="mytopnav">
    <a class="navbar-brand" href="https://hz.nl/">
        <div class="logo-image">
            <img src="/images/hz.jfif" class="scale-down">
        </div>
    </a>
    <!-- Right-aligned links -->
    <div class="mytopnav-right">
        <a href="/">Home</a>
        <a href="/myprofile" class=""{{ Request::path() === '/myprofile' ? 'active' : '' }}"">My profile</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/faq">FAQ</a>
        <a href="/blog">Blog</a>
    </div>
</div>

<div class="center">
    <a href="/myprofile">
        <img src="/images/src.jpg" width="250" height="300" class="profile" alt="My face">
    </a>
</div>

</br>
</br>
<main class="generaltext">
    <div class="container-articles-general">
        <article>
            <h2><strong>Viktória Žiaková</strong></h2>
            </br>
            <p>
                Slovakia is my homeland.
                Nature is the best part of Slovakia. Personally, I adore skiing and try to ski every winter season.
                I fear I might lose the skills I have developed over the years. I hope I can return home this Christmas Eve.
                </br>
                </br>
                Even though my mother tongue is Slovak I prefer English because I think it is definetly a more international
                language.
                That is why I prefer to speak English everyday and practice as much as possible.
                </br>
                </br>
                Listening to music is one of my favorite things.
                I do have a favorite song from every genre but I mostly listen to electronic music.
                I am very picky when it comes to electronic music.
            <ul>
                <p class="subtitle">My favorite electronic subgenres are:</p>
                <li>Techno</li>
                <li>Jungle</li>
                <li>Drum and bass</li>
                <li>Trance</li>
                <li>UK garage</li>
            </ul>
            </p>
        </article>
</main>
</div>
</br>
<footer>
    Author: Viktória Žiaková
</footer>
</body>

</html>
