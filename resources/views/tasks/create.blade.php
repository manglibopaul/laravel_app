<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div style="margin-top:12px;">
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50">{{ old('description') }}</textarea>
        </div>

        <div style="margin-top:12px;">
            <button type="submit">Create Task</button>
            <a href="{{ route('tasks.index') }}">Cancel</a>
        </div>
    </form>
</body>
</html>
