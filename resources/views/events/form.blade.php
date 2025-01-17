@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать событие</h1>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $event->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $event->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Дата</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Сохранить изменения</button>
    </form>
</div>
@endsection