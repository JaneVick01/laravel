<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/app.css">
</head>


<section class="section">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3"> {{-- These divs are needed for proper layout --}}
                <form method="POST" action="{{ route('bars.store') }}">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="bg-white shadow-md rounded-lg px-8 py-6"> {{-- The form is placed inside a Card component --}}
                        <h2 class="text-2xl mb-4">Add a new post</h2> {{-- The Card header content --}}

                        <div class="mb-4">
                            <label class="block font-bold mb-2">Name</label>
                            <input name="name" class="input @error('name') is-danger @enderror" value="{{ old('name') }}"
                                   type="text" placeholder="Your name here">
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold mb-2">Waldo</label>
                            <input name="waldo" value="{{ old('waldo') }}"
                                   class="input @error('waldo') is-danger @enderror" value="{{ old('waldo') }}"
                                   type="text" placeholder="A number or a name">
                            @error('waldo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold mb-2">Grault</label>
                            <input type="number" name="grault" class="input @error('grault') is-danger @enderror"
                                   value="{{ old('grault') }}" placeholder="A number">
                            @error('grault')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            {{-- Here are the form buttons: save, reset, and cancel --}}
                            <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Save</button>
                            <button type="reset" class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded ml-2">Reset</button>
                            <a type="button" href="/bars" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


