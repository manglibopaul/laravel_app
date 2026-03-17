<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-blue-700 text-white px-6 py-4 shadow">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <span class="text-xl font-bold tracking-wide">Laravel Task Manager</span>
            <div class="flex gap-4 text-sm">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ route('greet') }}" class="hover:underline">Greet</a>
                <a href="{{ route('tasks.index') }}" class="hover:underline font-semibold">Tasks</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto mt-8 px-4">

        @if(session('success'))
            <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">All Tasks</h1>
            <a href="{{ route('tasks.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded shadow transition">
                + New Task
            </a>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 font-semibold">#</th>
                        <th class="px-4 py-3 font-semibold">Title</th>
                        <th class="px-4 py-3 font-semibold">Description</th>
                        <th class="px-4 py-3 font-semibold text-center">Status</th>
                        <th class="px-4 py-3 font-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($tasks as $task)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-500">{{ $task->id }}</td>
                        <td class="px-4 py-3 font-medium text-gray-800">{{ $task->title }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ $task->description ?? '—' }}</td>
                        <td class="px-4 py-3 text-center">
                            @if($task->is_completed)
                                <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Done</span>
                            @else
                                <span class="inline-block bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-1 rounded-full">Pending</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('tasks.show', $task) }}"
                                   class="text-blue-600 hover:underline text-xs font-medium">View</a>
                                <a href="{{ route('tasks.edit', $task) }}"
                                   class="text-yellow-600 hover:underline text-xs font-medium">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Delete this task?')"
                                            class="text-red-600 hover:underline text-xs font-medium">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-gray-400">No tasks found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>
</body>
</html>
