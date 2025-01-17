<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard-admin.css') }}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <h1>Admin Dashboard</h1>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="admin-links">
                    <a href="{{ route('admin.users') }}" class="btn btn-primary">Manage Users</a>
                    <a href="{{ route('faq.admin') }}" class="btn btn-primary">Manage FAQ</a>
                    <a href="{{ route('admin.messages') }}" class="btn btn-primary">Manage Messages</a>
                    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Create News Post</a>
                    <a href="" class="btn btn-primary">Manage Inventory</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
