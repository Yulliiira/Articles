@extends('templates.main')

@section('main')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
        @foreach ($articles as $article)
            @include('components.article', [
                'id' => $article->id,
                'title' => $article->title,
                'body' => $article->body,
                'createdAT' => $article->created_at,
                'preview_image' => $article->preview_image
            ])
        @endforeach
    </div>
@endsection
