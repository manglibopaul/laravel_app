<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title.' | '.config('app.name') : config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    <div class="max-w-6xl mx-auto">
        <header class="flex items-center justify-between px-6 py-4">
            <a href="/" class="text-xl font-semibold">{{ config('app.name', 'Laravel App') }}</a>
            <nav class="space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-gray-900 px-3 py-1 rounded">Home</a>
                <a href="{{ route('greet') }}" class="text-gray-600 hover:text-gray-900 px-3 py-1 rounded">Greet</a>
                <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-900 px-3 py-1 rounded">Tasks</a>
            </nav>
        </header>

        <main class="px-6 pb-12">
            @yield('content')
        </main>

        <footer class="text-center text-sm text-gray-500 py-6">
            © {{ date('Y') }} {{ config('app.name', 'Laravel App') }}
        </footer>
    </div>
</body>
</html>
