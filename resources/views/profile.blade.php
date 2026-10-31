<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
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
        .profile {
            background: white;
            padding: 25px;
            margin-top: 25px;
            border-radius: 8px;
            max-width: 500px;
        }
        h1 {
            color: #243b55;
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

<h1>My Profile</h1>

<div class="profile">
    @if($user)
        <h2>{{ $user->full_name }}</h2>
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    @else
        <p>No user profile found.</p>
    @endif
</div>

</body>
</html>