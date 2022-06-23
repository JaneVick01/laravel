@extends('layout')

@section('content')
</br>
</br>
<main class="generaltext">

        <div class="container-articles-general"></div>
            <h3 class="blog-h"><strong>FAQ</strong></h3>
            </br>
            </br>

            @foreach($faqs as $faq)
                <li>
                <p class="subtitle line">{{$faq->question}}</p>
                <li><a href="/faq/{{$faq->id}}">{{$faq->answer}}</a></li>
                </li>
            @endforeach


</main>
</body>
</br>
@endsection
