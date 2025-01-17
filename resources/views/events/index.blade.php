
<div class="container">
    <h1>Список событий</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Добавить событие</a>
    @if($events->isEmpty())
    <p>Событий пока нет.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date }}</td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
