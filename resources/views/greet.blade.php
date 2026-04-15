<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    
</head>
</head>
<body class="min-h-screen bg-gradient-to-b from-white via-gray-50 to-gray-100 text-gray-900">
    <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <div class="text-lg font-semibold">Laravel App</div>
        <nav class="space-x-4">
            <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
            <a href="{{ route('greet') }}" class="text-gray-600 hover:text-gray-900">Greet</a>
            <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-900">Tasks</a>
        </nav>
    </header>

    <main class="flex items-center justify-center px-6">
        <section class="max-w-4xl w-full grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="p-8 bg-white rounded-2xl shadow-lg">
                <h1 class="text-3xl md:text-4xl font-extrabold mb-4">Hello, Welcome!</h1>
                <p class="text-gray-600 mb-6">Welcome to the Laravel sample application. This project demonstrates migrations, models, controllers, and a basic frontend styled with Tailwind CSS.</p>
                <div class="flex gap-3">
                    <a href="{{ route('tasks.index') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">View Tasks</a>
                    <a href="{{ url('/') }}" class="inline-block px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Welcome Page</a>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="w-full max-w-sm p-6 bg-gradient-to-br from-pink-50 to-yellow-50 rounded-xl shadow-md">
                    <svg viewBox="0 0 24 24" class="w-32 h-32 mx-auto text-pink-600" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v6"></path>
                        <path d="M5 12h14"></path>
                        <circle cx="12" cy="16" r="6"></circle>
                    </svg>
                    <p class="text-center text-gray-700 mt-4">Manage tasks easily with the built-in CRUD.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-12 py-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} Laravel App
    </footer>
</body>
</html>
