<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #243b55;
            color: white;
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

<h1>Complete Task List</h1>
<p>All scheduled tasks are displayed below.</p>

<table>
    <tr>
        <th>No.</th>
        <th>Task Title</th>
        <th>Status</th>
        <th>Task Date</th>
    </tr>

    @forelse($tasks as $task)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ ucfirst($task->status) }}</td>
            <td>{{ $task->task_date->format('F d, Y') }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">No tasks available.</td>
        </tr>
    @endforelse
</table>

</body>
</html>