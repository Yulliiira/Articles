@extends('templates.main')

@section('main')
    <article>
        <img src="{{ $article->preview_image ?: asset('storage/article/previews/default.png') }}" class="card-img-top"
            alt="{{ $article->title ?? 'No title available' }}" style="width: 20%">

        <div class="description">
            <h1>{{ $article->title }}</h1>
            <span class="badge text-bg-secondary mb-2">{{ $article->created_at }}</span>
            <p style="width: 30%">{{ $article->body }}</p>

            <div class="btn-group mb-3">
                <a href="{{ route('article.page.edit', ['article' => $article->id]) }}" class="btn btn-success">
                    Edit
                </a>

                <form class="ml-1" action="{{ route('articles.delete', ['article' => $article->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>

            @if ($article->comments->count() > 0)
                <h3>Comments</h3>
                @foreach ($article->comments as $comment)
                    <div class="card mt-2" style="width: 30%">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comment->username }}</h5>
                            <p class="card-text">{{ $comment->body }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No comments yet.</p>
            @endif

            <br>
            <h3 class="mb-3">Post a comment</h3>
            <form action="{{ route('comments.store', ['article' => $article->id]) }}" method="POST" style="width: 30%">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Text</label>
                    <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </article>
@endsection
