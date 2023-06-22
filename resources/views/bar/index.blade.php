@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">News</p>
                <p class="subtitle is-3">The latest news on the HZ</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/bars/create" class="button is-primary">Add a new article...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($bars as $bar)
                                <div class="panel {{ $bar->grault<3.14 ? 'has-background-info-dark' : '' }}">
                                    <a class="panel-block" href="{{ route('bars.show', $bar) }}">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>

                                                        <strong>{{ $bar->name }}</strong><br>
                                                        <small>{{ $bar->id }}</small><br>
                                                        <small>{{ $bar->waldo }}</small><br>
                                                        <small>{{ $bar->grault }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
