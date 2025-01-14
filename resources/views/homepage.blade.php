<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>

    @include('components.navbar')

    <div class="intro">
        <div class="intro-left">
            <h1>powerful computers<br>at a click's reach</h1>
            <button>buy now</button>
        </div>

        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" width="500px" height="auto">

    </div>

    <div id="pc-options" class="pc-options">
        <div class="pc-1">
            <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" width="500px" height="auto">
            <h1>BUDGET</h1>
            <h2>800€</h2>
            <h2>components:</h2>
            <ul>
                <li>AMD Ryzen 5 5600</li>
                <li>16GB DDR4</li>
                <li>500GB SSD</li>
                <li>RTX 2060</li>
            </ul>
            <button>buy now</button>
        </div>
        <div class="pc-2">
            <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" width="500px" height="auto">
            <h1>PREMIUM</h1>
            <h2>1500€</h2>
            <h2>components:</h2>
            <ul>
                <li>AMD Ryzen 7 5700X</li>
                <li>32GB DDR4</li>
                <li>1TB SSD</li>
                <li>RTX 2070 Super</li>
            </ul>
            <button>buy now</button>
        </div>
        <div class="pc-3">
            <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" width="500px" height="auto">
            <h1>ULTIMATE</h1>
            <h2>2000€</h2>
            <h2>components:</h2>
            <ul>
                <li>AMD Ryzen 7 7800X3D</li>
                <li>64GB DDR4</li>
                <li>2TB SSD</li>
                <li>RTX 2080 Ti</li>
            </ul>
            <button>buy now</button>

        </div>
        <div class="pc-4">
            <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT Pre-build" width="500px" height="auto">
            <h1>GODLIKE</h1>
            <h2>4000€</h2>
            <h2>components:</h2>
            <ul>
                <li>AMD Ryzen 9 7900X3D</li>
                <li>64GB DDR5</li>
                <li>3TB SSD</li>
                <li>RTX 4090</li>
            </ul>
            <button>buy now</button>

        </div>
    </div>

    <div class="news-post">
        @foreach ($news as $newsItem)
            <div class="news-item">
                <p>{{ $newsItem->published_at->format('F j, Y') }}</p>
                <h3>{{ $newsItem->title }}</h3>
                <p>{{ $newsItem->content }}</p>
                <img src="{{ $newsItem->image }}">
            </div>
        @endforeach
    </div>

    <div class="pc-drop">
        <h1>PC DROPS</h1>
        <h2>Find your happiness in the drops</h2>
        <a href="pc_drop.php">View all drops</a>
    </div>

    @include('components.footer')


</body>
</html>
