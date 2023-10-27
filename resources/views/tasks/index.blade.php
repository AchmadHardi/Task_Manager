<!DOCTYPE html>
<html>
<head>
    <title>List of Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>List of Tasks</h1>
        <form action="" method="get">
            <div class="input-group mt-3">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" style="max-width: 200px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary ml-1" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-{{ session('alert-info') }} mt-3">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </form>        
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-3">Create New Task</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
