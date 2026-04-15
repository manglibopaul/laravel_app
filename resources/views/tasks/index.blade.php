<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    <div class="max-w-6xl mx-auto p-6">
        <header class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Create New Task</a>
        </header>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <div class="bg-white shadow rounded overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Title</th>
                        <th class="p-3">Description</th>
                        <th class="p-3">Completed</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                    <tr class="border-t">
                        <td class="p-3 align-top">{{ $task->id }}</td>
                        <td class="p-3 align-top">{{ $task->title }}</td>
                        <td class="p-3 align-top">{{ $task->description }}</td>
                        <td class="p-3 align-top">@if($task->is_completed)<span class="text-green-600 font-medium">Yes</span>@else<span class="text-gray-600">No</span>@endif</td>
                        <td class="p-3 align-top">
                            <a href="{{ route('tasks.show', $task) }}" class="text-blue-600 hover:underline">View</a>
                            <span class="px-1">|</span>
                            <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this task?')" class="ml-2 text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-6 text-center text-gray-600">No tasks found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
