<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/app.css">
</head>

<section class="hero is-large is-bold bg-primary" style="background: url('{{$bar->img_url}}') no-repeat center center; background-size: cover;">
</section>

<section class="section">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg p-4">
                <div class="mb-4">
                    <strong>{{ $bar->name }}</strong><br>
                    <small>{{ $bar->id }}</small><br>
                    <small>{{ $bar->waldo }}</small><br>
                    <small>{{ $bar->grault }}</small>
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('bars.edit', $bar->id) }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('bars.destroy', $bar->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
