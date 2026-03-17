<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-blue-700 text-white px-6 py-4 shadow">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <span class="text-xl font-bold tracking-wide">Laravel Task Manager</span>
            <div class="flex gap-4 text-sm">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ route('greet') }}" class="hover:underline">Greet</a>
                <a href="{{ route('tasks.index') }}" class="hover:underline">Tasks</a>
            </div>
        </div>
    </nav>

    <main class="max-w-lg mx-auto mt-10 px-4">
        <div class="bg-white rounded-xl shadow p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Task</h1>

            @if($errors->any())
                <ul class="mb-4 px-4 py-3 bg-red-50 border border-red-300 text-red-700 rounded text-sm list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('tasks.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description') }}</textarea>
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-2 rounded-lg shadow transition">
                        Create Task
                    </button>
                    <a href="{{ route('tasks.index') }}"
                       class="text-sm text-gray-500 hover:text-gray-700">Cancel</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
