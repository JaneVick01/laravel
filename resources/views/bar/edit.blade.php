@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method ="POST" action="/bars/ {{$bar->id}}">
                        @csrf
                        @method('PUT')
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    EDIT a bar
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">name</label>
                                        <div class="control">
                                            <input name="name" value="{{$bar->name}}" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="your name here">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">waldo</label>
                                        <div class="control">
                                            <input name="waldo" value="{{$bar->waldo}}" class="textarea @error('waldo') is-danger @enderror"
                                                      type="text" placeholder=""></input>
                                        </div>
                                        @error('waldo')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">grault</label>
                                        <div class="control">
                                            <input name="grault" value="{{$bar->grault}}" class="number @error('grault') is-danger @enderror"
                                                      rows="15" ></input>
                                        </div>
                                        @error('grault')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/bars" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><br><br><br>
                    <h1>DELETE BUTTON</h1>
                    <form method="POST" action="/bars/{{ $bar->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
