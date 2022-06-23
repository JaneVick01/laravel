@extends('layout')

@section('content')
    <h1>New Article</h1>
    <form method="post" action="/faq">
        @csrf
        <div class="field">
            <label class="label" for="question">Question</label>
            <div class="control">
            <textarea
                class="input is-danger-box"
                id="question"
                name="question">
            </textarea>
            </div>
        </div>
        <div class="field">
            <label class="label" for="answer">Answer</label>
            <div class="control">
            <textarea
                class="input is-danger-box"
                id="answer"
                name="answer">
            </textarea>
            </div>
        </div>
        <div>
            <button class="button" type="submit">Submit</button>
        </div>
    </form>




@endsection
