<div class="col">
    <div class="card h-100 d-flex flex-column">
        <img src="{{ $article->preview_image ?: asset('storage/article/previews/default.png') }}" class="card-img-top"
            alt="{{ $article->title ?? 'No title available' }}">
        <div class="card-body d-flex flex-column flex-grow-1">
            <div class="mt-auto">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text flex-grow-1">{{ substr($article->body, 0, 100) . '...' }}</p>
                <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
                <a href="{{ route('article', ['article' => $article->id]) }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    </div>
</div>
