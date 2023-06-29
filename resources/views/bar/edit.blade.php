<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/app.css">
</head>

<section class="section">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <form method="POST" action="/bars/{{$bar->id}}">
                    @csrf
                    @method('PUT')
                    <div class="bg-white shadow-md rounded-lg px-8 py-6">
                        <header class="card-header">
                            <p class="card-header-title">
                                EDIT a bar
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <div class="mb-4">
                                    <label class="block font-bold mb-2">Name</label>
                                    <div class="control">
                                        <input name="name" value="{{$bar->name}}" class="input @error('name') is-danger @enderror" type="text" placeholder="your name here">
                                    </div>
                                    @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block font-bold mb-2">Waldo</label>
                                    <div class="control">
                                        <input name="waldo" value="{{$bar->waldo}}" class="input @error('waldo') is-danger @enderror" type="text" placeholder=""></input>
                                    </div>
                                    @error('waldo')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block font-bold mb-2">Grault</label>
                                    <div class="control">
                                        <input name="grault" value="{{$bar->grault}}" class="input @error('grault') is-danger @enderror" rows="15"></input>
                                    </div>
                                    @error('grault')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="control">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Save</button>
                                </div>
                                <div class="control">
                                    <button type="reset" class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded">Reset</button>
                                </div>
                                <div class="control">
                                    <a type="button" href="/bars" class="bg-gray-300 hover:bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br><br><br><br>
                <form method="POST" action="/bars/{{ $bar->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>
    </div>
</section>
