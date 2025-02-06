@extends('templates.main')

@section('main')
    <article>
        <img
            src="{{ $article->preview_image ?: asset('storage/article/previews/default.png') }}" class="card-img-top"
            alt="{{ $article->title ?? 'No title available' }}"
            style="width: 20%"
        >
        <div class="description">
            <h1>{{ $article->title }}</h1>
            <span class="badge text-bg-secondary">{{ $article->created_at }}</span>
            <p style="width: 30%">{{ $article->body }}</p>
            <a href="{{ route('article.page.edit', ['article' => $article->id]) }}" class="btn btn-success ">Edit</a>
        </div>
    </article>
@endsection
