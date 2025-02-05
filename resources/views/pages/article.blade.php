@extends('templates.main')

@section('main')

<h1>{{$article->title}}</h1>
<span class="badge text-bg-secondary">{{ $article->created_at  }}</span>
<p>{{$article->body}}</p>

@endsection