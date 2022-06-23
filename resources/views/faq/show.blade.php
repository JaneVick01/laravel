@extends('layout')

@section('content')

    <main class="page_content">
        <div class="goback">
            <a href="../faq"><button><span class="arrow left"></span> Go Back</button></a>
        </div>
        <h1>{{$faq->question}}</h1>
        <p class="column">{{$faq->answer}}</p>
    </main>
@endsection
