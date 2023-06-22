@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('bars.store') }}">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Add a new bar
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror" value="{{ old('name') }}"
                                                   type="text" placeholder="your name here">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">waldo</label>
                                        <div class="control">
                                            <input name="waldo" value="{{ old('waldo') }}"
                                                      class="textarea @error('waldo') is-danger @enderror"
                                                      type="text" placeholder=""></input>
                                        </div>
                                        @error('waldo')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">grault</label>
                                        <div class="control">
                                            <input type="number" name="grault" class="number @error('grault') is-danger @enderror" value="{{ old('grault') }}" rows="15" placeholder=""></input>
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
                </div>
            </div>
        </div>
    </section>
@endsection
