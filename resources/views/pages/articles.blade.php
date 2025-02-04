@extends('templates.main')

@section('main')
    <div class="d-flex">
        @foreach ($articles as $article)
            @include('components.article', ['id' => $article['id'],'title' => $article['title'], 'body' => $article['body']])
        @endforeach
    </div>
@endsection
