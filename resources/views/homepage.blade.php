<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>
    @extends('layouts.user-layout')

    @section('title', 'Home')

    @section('content')
        <div class="intro">
            <div class="intro-left">
                <h1>powerful computers<br>at a click's reach</h1>
                <button>buy now</button>
            </div>

            <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" class="intro-img">
        </div>

        <div id="pc-options" class="pc-options">
            @if($pcs)
                @foreach ($pcs as $index => $pc)
                    <div class="pc-item pc-{{ $index + 1 }}">
                        @if ($pc->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $pc->images->first()->image_path) }}" alt="{{ $pc->name }}" class="pc-img">
                        @endif
                        <h1>{{ $pc->name }}</h1>
                        <h2>{{ $pc->price }}€</h2>
                        <h2>components:</h2>
                        <ul>
                            @foreach (explode(',', $pc->components) as $component)
                                <li>{{ $component }}</li>
                            @endforeach
                        </ul>
                        <button>buy now</button>
                    </div>
                @endforeach
            @else
                <p>No PCs available.</p>
            @endif
        </div>

        <div class="news-post">
            <h2>Latest News</h2>
            @foreach ($news as $newsItem)
                <div class="news-item">
                    <p>{{ $newsItem->published_at->format('F j, Y') }}</p>
                    <h3>{{ $newsItem->title }}</h3>
                    <p>{{ $newsItem->content }}</p>
                    @if ($newsItem->image)
                        <img src="data:image/jpeg;base64,{{ base64_encode($newsItem->image->image_data) }}" alt="News Image">
                    @endif
                </div>
            @endforeach
        </div>
    @endsection
</body>
</html>
