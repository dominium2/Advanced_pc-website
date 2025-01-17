<div class="news-post">
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
