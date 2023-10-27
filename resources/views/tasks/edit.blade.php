<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Task</h1>

        <form method="post" action="{{ route('tasks.update', ['task' => $task->id]) }}">
            @csrf
            @method('PUT') <!-- Use the PUT method for updating -->

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required>{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" class="form-control" required>
                    <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Back to Task List</a>
    </div>
</body>
</html>
