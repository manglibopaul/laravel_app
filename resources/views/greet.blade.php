<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">

    <nav class="bg-blue-700 text-white px-6 py-4 shadow">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <span class="text-xl font-bold tracking-wide">Laravel Task Manager</span>
            <div class="flex gap-4 text-sm">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ route('greet') }}" class="hover:underline font-semibold">Greet</a>
                <a href="{{ route('tasks.index') }}" class="hover:underline">Tasks</a>
            </div>
        </div>
    </nav>

    <main class="flex items-center justify-center min-h-[calc(100vh-64px)]">
        <div class="bg-white rounded-2xl shadow-lg px-12 py-10 text-center max-w-md w-full mx-4">
            <div class="text-5xl mb-4">👋</div>
            <h1 class="text-3xl font-bold text-blue-700 mb-3">Hello, Welcome!</h1>
            <p class="text-gray-500 mb-8">Greetings from the Laravel app. Everything is up and running with Tailwind CSS.</p>
            <a href="{{ route('tasks.index') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                Go to Tasks
            </a>
        </div>
    </main>
</body>
</html>
