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

<!-- Top navigation -->
<div class="mytopnav">
    <a class="navbar-brand" href="https://hz.nl/">
        <div class="logo-image">
            <img src="/images/hz.jfif" class="scale-down">
        </div>
    </a>
    <div class="mytopnav-right">
        <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a>
        <a href="/myprofile" class="{{ Request::path() === '/myprofile' ? 'active' : '' }}">My profile</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/faq">FAQ</a>
        <a href="/blog">Blog</a>
    </div>
</div>
<body class="bimage">
    @yield('content')
</body>
<footer>
    Author: Viktória Žiaková
</footer>

