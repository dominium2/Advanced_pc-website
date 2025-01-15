<!-- filepath: /Ubuntu/var/www/html/Pc-website/laravel/Pc-website/resources/views/faq/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
</head>
<body>
    <h1>Frequently Asked Questions</h1>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <ul>
            @foreach ($category->questions as $question)
                <li>
                    <strong>{{ $question->question }}</strong>
                    <p>{{ $question->answer }}</p>
                </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
