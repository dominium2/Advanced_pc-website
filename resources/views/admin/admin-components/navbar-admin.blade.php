<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/admin/admin-components/navbar-admin.css') }}">
</head>
<body>
    <nav class="admin-navbar">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
            <li><a href="{{ route('admin.news.create') }}">Create News</a></li>
            <li><a href="{{ route('admin.messages') }}">Messages</a></li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</body>
</html>
