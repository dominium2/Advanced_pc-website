<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('admin.admin-layouts.admin-layout')

    @section('title', 'Create PC')

    @section('content')
        <div class="container">
            <h1>Create PC</h1>
            <form action="{{ route('admin.pcs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-field">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>
                <div class="input-field">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="input-field">
                    <label for="components">Components (comma-separated):</label>
                    <textarea id="components" name="components" rows="5" required></textarea>
                </div>
                <button type="submit">Create PC</button>
            </form>
        </div>
    @endsection
</body>
</html>
