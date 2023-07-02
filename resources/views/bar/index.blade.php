<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/app.css">
</head>

<section class="hero is-medium bg-primary">
    <div class="hero-body">
        <div class="container bg-stone-600">
            <p class="text-2xl font-bold">News</p>
            <p class="text-xl">The latest news on the HZ</p>
        </div>
    </div>
</section>


<section class="section bg-gray-200">
    <div class="container">
        <div class="flex justify-end">
            <a href="/bars/create" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Add a new article...</a>
        </div>

        <div class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($bars as $bar)
                    <div class="bg-white rounded-lg p-4 {{ $bar->grault < 3.14 ? 'bg-info-dark' : '' }}">
                        <a href="{{ route('bars.show', $bar) }}" class="block">
                            <div class="flex items-start">
                                <div class="ml-2">
                                    <p class="font-bold">{{ $bar->name }}</p>
                                    <p class="text-sm">{{ $bar->id }}</p>
                                    <p class="text-sm">{{ $bar->waldo }}</p>
                                    <p class="text-sm">{{ $bar->grault }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
