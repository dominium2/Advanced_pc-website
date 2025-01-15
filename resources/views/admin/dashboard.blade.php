<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard-admin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                <li><a href="{{ route('faq.admin') }}">Manage FAQ</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
