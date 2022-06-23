@extends('layout')
@section('content')
    <h1>New Faq</h1>
    <form method="post" action="/faq/{{$faq->id}}">
        @csrf
        @method('put')
        <div class="field">
            <label class="label" for="question">Question</label>
            <div class="control">
                <input value="{{$faq->question}}"
                       class="input is-danger-box"
                       id="question"
                       name="question">
            </div>
        </div>
        <div class="field">
            <label class="label" for="answer">Answer</label>
            <div class="control">
                <textarea
                    class="input is-danger-box"
                    id="answer"
                    name="answer">
                    {{$faq->answer}}                </textarea>
            </div>
        </div>
        <div>
            <button class="button" type="submit">Submit</button>
        </div>
    </form>
    <form method="post" action="/faq/{{$faq->id}}">
        @csrf
        @method('delete')
        <button class="" type="submit">Delete</button>
    </form>
@endsection
