@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl shadow">
        <div class="flex justify-between items-start">
            <h2 class="text-2xl font-semibold">Task Details</h2>
            <div class="space-x-2">
                <a href="{{ route('tasks.edit', $task) }}" class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>
                <a href="{{ route('tasks.index') }}" class="px-3 py-1 border rounded text-gray-700">Back</a>
            </div>
        </div>

        <div class="mt-6 space-y-3">
            <div><span class="font-medium">ID:</span> {{ $task->id }}</div>
            <div><span class="font-medium">Title:</span> {{ $task->title }}</div>
            <div><span class="font-medium">Description:</span> {{ $task->description ?? 'N/A' }}</div>
            <div><span class="font-medium">Completed:</span> {{ $task->is_completed ? 'Yes' : 'No' }}</div>
            <div class="text-sm text-gray-500">Created: {{ $task->created_at }} • Updated: {{ $task->updated_at }}</div>
        </div>
    </div>
@endsection
