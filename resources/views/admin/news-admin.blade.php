<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News Post</title>
    <link rel="stylesheet" href="{{ asset('css/admin/news-admin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Create News Post</h1>
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="input-field">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="input-field">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="input-field">
                <label for="published_at">Published At:</label>
                <input type="datetime-local" id="published_at" name="published_at" required>
            </div>
            <button type="submit">Create Post</button>
        </form>
    </div>
</body>
</html>
