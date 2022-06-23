@extends('layout')

@section('content')
</br>
</br>
<main class="generaltext">
    <div class="container-articles-general">
        <h4 class="blog-h"><strong>My Blog</strong></h4>
        </br>
        </br>
        <p class="subtitle">Study choice</p>
        <ul>
            <li>
                It has always been my ambition to become a
                successful IT specialist. It is a step towards my future career.
                Thanks to my swift progress of my studies at Business Academy, it is glaring that studying is what I
                would like to engage in even more. While studying at Business Academy, I developed a keen interest
                in products, technology and their design. I consider it a vibrant experience to get the opportunity to meet
                students from all over the world and learn about their culture and values.
                I believe that during my internship I will get to know different job opportuinities and get a glimpse of what
                awaits me.
                I can either choose to work abroad or return to my homeland and work at our family company.
                <a target="_blank" href="/ictart">ICT article</a>
            </li>
        </ul>
        <p class="subtitle">Personal SWOT analysis</p>
        <ul>
            <li>
                I am not afriad to adapt at all. I think I prefer to work alone but occasionaly working as a team is great
                too.
                My weakest point is probably mathematics. I am poor at handling stress and I am quite forgetfull.
                My greatest opportunity is right now at this university. I will try my best to adapt and succeed.
                I believe my time management is a threat. Eliminating this threat is my goal.
            </li>
        </ul>
        <p class="subtitle">Programming Experience</p>
        <ul>
            <li>
                I am a beginner.
                To be honest I tried coding a few easy applications for fun and just to get a glimpse of what awaits me.
            </li>
        </ul>
        <p class="subtitle">First feedback</p>
        <p class="line">Compliments</p>
        <ul>
            <li>Good use of colour</li>
            <li>Nice usage of backgrounds on top of images</li>
            <li>Code quality is fine</li>
        </ul>
        <p class="line">Improvements</p>
        <ul>
            <li>File naming might cause issues = carelessness</li>
            <li>Usage of Inline styles = carelessness</li>
            <li>Capitalization of file names = carelessness</li>
        </ul>
        <p class="line">Code review feedback</p>
        <ul>
            <li>
                My code review feedback was pretty much done orally.
                It was basically just advice on how to space my pictures and text.
                I believe I have already implemented that factor.
            </li>
        </ul>
        <p class="line">Tasks</p>
        <ul>
            <li>1. No inline styles</li>
            <li>2. Clearer file naming</li>
            <li>3. No capitalization of file names</li>
            <li>4. Add a small company in my blog</li>
            <li>5. Find out what issues iframe might cause</li>
            <!-- Iframe issues
        insecure
        their reputation is tainted by unappropriate usage
        some sites doesnt allow being run in an iframe
        your site becomes vulnerable to cross-site attacks
        usability issues, problems with google
        might cause SEO problems
        -->
            </li>
        </ul>
        <p class="line">My thoughts</p>
        <ul>
            <li>
                I like to receive feedback, it allows me to grow and improve.
                Everyone makes mistakes. I believe that allows us to learn what not to do and move on.
            </li>
        </ul>
    </div>
        </br>
        <h7 class="blog-h"><strong>Profession</strong></h7>
        </br>
        </br>
        <div class="center">
            <a href="/blogpostacc">
                <img src="/images/accenture.png" width="250" height="250" class="blogimage" alt="accenture logo">
            </a>
        </div>
        <div class="center">
            <a href="/blogpostdxc">
                <img src="/images/dxc.jpg" width="400" height="200" class="blogimage" alt="dxc logo">
            </a>
        </div>
        <div class="center">
            <a href="/blogpostatos">
                <img src="/images/atos.png" width="300" height="200" class="blogimage" alt="atos logo">
            </a>
            <div class="center">
                <a href="/blogpostgoogle">
                    <img src="/images/google.jpg" width="400" height="200" class="blogimage" alt="google logo">
                </a>
            </div>
            <div class="center">
                <a href="/blogpostoracle">
                    <img src="/images/oracle.png" width="400" height="200" class="blogimage" alt="oracle logo">
                </a>
            </div>
            <div class="center">
                <a href="/blogpostexa ">
                    <img src="/images/logooberon.png" width="500" height="150" class="blogimage" alt="oberon logo">
                </a>
            </div>
</main>
</div>
</br>
</br>
</body>
@endsection
