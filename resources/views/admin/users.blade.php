<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Manage Users</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->isAdmin ? 'Yes' : 'No' }}</td>
                        <td>
                            <form action="{{ route('admin.updateUser', $user) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $user->name }}" required>
                                <input type="email" name="email" value="{{ $user->email }}" required>
                                <select name="isAdmin" required>
                                    <option value="1" {{ $user->isAdmin ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ !$user->isAdmin ? 'selected' : '' }}>No</option>
                                </select>
                                <button type="submit">Update</button>
                            </form>
                            <form action="{{ route('admin.deleteUser', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
