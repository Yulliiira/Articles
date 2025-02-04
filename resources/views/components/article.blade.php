<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $title  ?? null}}</h5>
        <p class="card-text">{{ $body ?? null}}</p>
        <a href="{{route('article', ['article' => $id])}}" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
