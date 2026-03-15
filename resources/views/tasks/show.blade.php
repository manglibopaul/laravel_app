<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>

    <p><strong>ID:</strong> {{ $task->id }}</p>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description ?? 'N/A' }}</p>
    <p><strong>Completed:</strong> {{ $task->is_completed ? 'Yes' : 'No' }}</p>
    <p><strong>Created:</strong> {{ $task->created_at }}</p>
    <p><strong>Updated:</strong> {{ $task->updated_at }}</p>

    <a href="{{ route('tasks.edit', $task) }}">Edit</a> |
    <a href="{{ route('tasks.index') }}">Back to Tasks</a>
</body>
</html>
