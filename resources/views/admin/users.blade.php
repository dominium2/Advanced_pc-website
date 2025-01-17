<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="{{ asset('css/admin/users.css') }}">
</head>
<body>
    @extends('admin.admin-layouts.admin-layout')

    @section('content')
    <div class="container">
        <h1>Manage Users</h1>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                        <td>
                            <form action="{{ route('admin.updateUser', $user) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="firstname" value="{{ $user->firstname }}" required>
                                <input type="text" name="lastname" value="{{ $user->lastname }}" required>
                                <input type="email" name="email" value="{{ $user->email }}" required>
                                <select name="is_admin" required>
                                    <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>No</option>
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

        <h2>Add New User</h2>
        <form action="{{ route('admin.createUser') }}" method="POST">
            @csrf
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="is_admin" required>
                <option value="1">Yes</option>
                <option value="0" selected>No</option>
            </select>
            <button type="submit">Add User</button>
        </form>
    </div>
    @endsection
</body>
</html>
