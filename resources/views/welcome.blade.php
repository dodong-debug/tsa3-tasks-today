<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f6f9;
        }
        nav {
            background: #243b55;
            padding: 18px;
            border-radius: 8px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
        h1 {
            color: #243b55;
        }
        .task {
            background: white;
            padding: 15px;
            margin: 12px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/tasks">Task List</a>
    <a href="/profile">Profile</a>
    <a href="/about">About</a>
</nav>

<h1>Tasks for Today</h1>
<p>Here are your scheduled tasks for today.</p>

@forelse($tasks as $task)
    <div class="task">
        <h3>{{ $task->title }}</h3>
        <p>Status: {{ ucfirst($task->status) }}</p>
        <p>Date: {{ $task->task_date->format('F d, Y') }}</p>
    </div>
@empty
    <p>No tasks scheduled for today.</p>
@endforelse

</body>
</html>