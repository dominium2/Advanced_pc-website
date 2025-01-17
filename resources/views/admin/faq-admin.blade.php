<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin FAQ</title>
    <link rel="stylesheet" href="{{ asset('css/admin/faq-admin.css') }}">
</head>
<body>
    @extends('admin.admin-layouts.admin-layout')


    @section('content')
    <h1>Manage FAQ</h1>

    <h2>Add Category</h2>
    <form action="{{ route('faq.storeCategory') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Category Name" required>
        <button type="submit">Add Category</button>
    </form>

    <h2>Add Question</h2>
    <form action="{{ route('faq.storeQuestion') }}" method="POST">
        @csrf
        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="text" name="question" placeholder="Question" required>
        <textarea name="answer" placeholder="Answer" required></textarea>
        <button type="submit">Add Question</button>
    </form>

    <h2>Categories</h2>
    @foreach ($categories as $category)
        <form action="{{ route('faq.updateCategory', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $category->name }}" required>
            <button type="submit">Update</button>
        </form>
        <form action="{{ route('faq.destroyCategory', $category) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

    <h2>Questions</h2>
    @foreach ($categories as $category)
        <h3>{{ $category->name }}</h3>
        @foreach ($category->questions as $question)
            <form action="{{ route('faq.updateQuestion', $question) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="category_id" required>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $question->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="question" value="{{ $question->question }}" required>
                <textarea name="answer" required>{{ $question->answer }}</textarea>
                <button type="submit">Update</button>
            </form>
            <form action="{{ route('faq.destroyQuestion', $question) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    @endforeach
    @endsection
</body>
</html>
