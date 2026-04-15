<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-2xl shadow">
        <h2 class="text-2xl font-semibold mb-4">Create Task</h2>
        <form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input name="title" value="{{ old('title') }}" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-200 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Create</button>
                <a href="{{ route('tasks.index') }}" class="text-sm text-gray-500">Cancel</a>
            </div>
        </form>
    </div>
@endsection
        <div style="margin-top:12px;">
