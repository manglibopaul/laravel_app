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
<body class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Hello, Welcome!</h1>
        <p class="text-gray-600 mb-6">Greetings from the Laravel app.</p>
        <a href="{{ route('tasks.index') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Go to Index</a>
    </div>
</body>
</html>
