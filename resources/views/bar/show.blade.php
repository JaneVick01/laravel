@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background: url('{{$bar->img_url}}') no-repeat center center; background-size: cover;" >
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <strong>{{ $bar->name }}</strong><br>
                        <small>{{ $bar->id }}</small><br>
                        <small>{{ $bar->waldo }}</small><br>
                        <small>{{ $bar->grault }}</small>
                    </div>
{{--                edit button--}}
                    <a href="{{ route('bars.edit', $bar->id) }}" class="button is-primary">Edit</a>
{{--                delete button--}}
                    <form action="{{ route('bars.destroy', $bar->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
