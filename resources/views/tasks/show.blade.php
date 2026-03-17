<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
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
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Task Details</h1>
                @if($task->is_completed)
                    <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Completed</span>
                @else
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Pending</span>
                @endif
            </div>

            <dl class="space-y-4 text-sm">
                <div class="flex gap-2">
                    <dt class="w-28 font-semibold text-gray-500">ID</dt>
                    <dd class="text-gray-800">{{ $task->id }}</dd>
                </div>
                <div class="flex gap-2">
                    <dt class="w-28 font-semibold text-gray-500">Title</dt>
                    <dd class="text-gray-800">{{ $task->title }}</dd>
                </div>
                <div class="flex gap-2">
                    <dt class="w-28 font-semibold text-gray-500">Description</dt>
                    <dd class="text-gray-800">{{ $task->description ?? '—' }}</dd>
                </div>
                <div class="flex gap-2">
                    <dt class="w-28 font-semibold text-gray-500">Created</dt>
                    <dd class="text-gray-600">{{ $task->created_at->format('M d, Y H:i') }}</dd>
                </div>
                <div class="flex gap-2">
                    <dt class="w-28 font-semibold text-gray-500">Updated</dt>
                    <dd class="text-gray-600">{{ $task->updated_at->format('M d, Y H:i') }}</dd>
                </div>
            </dl>

            <div class="flex items-center gap-3 mt-8">
                <a href="{{ route('tasks.edit', $task) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow transition">
                    Edit
                </a>
                <a href="{{ route('tasks.index') }}"
                   class="text-sm text-gray-500 hover:text-gray-700">← Back to Tasks</a>
            </div>
        </div>
    </main>
</body>
</html>
