@extends ('layout')

@section ('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/app.css">
</head>

    <header>
        <img src="/images/pxl.jpg" width="1520" height="500" class="landfoto" alt="Mountain landscape">
    </header>

    <a href="/bars">
    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
        CHECK CRUD HERE
    </button>
    </a>
    <div class="indexprofile">
        <a href="/myprofile">
            <img src="/images/src.jpg" width="200" height="250" class="profile" alt="My face">
        </a>
    </div>

    <main class="generaltext">

        <div class="mytext">
            <div class="container-articles">
                <article>

                    <p class="subtitle"></p>
                    <p></p>
                    <ul>
                        <p class="subtitle">What I have learned so far: devops 4</p>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li><a target="_blank" href="https://github.com/">Git</a></li>
                    </ul>
                </article>

                <article>

                </article>

                <article class="article3">
                    <h5 class="subtitle line">My motivation</h5>
                    <p>My motivation mostly comes from the feeling of gratification after I successfully solve a problem.
                        Although I believe that motivation is more about having good discipline and good discipline is
                        intertwined with good time management. I like working on different projects and I think that there
                        is so much freedom of what you can do with ICT. That is precisely why chose ICT.</p>
                </article>
            </div>
        </div>
    </main>
    </br>
    </body>
