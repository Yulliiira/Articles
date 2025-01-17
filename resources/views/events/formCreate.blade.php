<form action="{{ route('events.store') }}" method="POST">
<div>
    Events:
    <input type="text" name="event" placeholder="Event">
    DateTime
    <input type="date" name="DateTime" placeholder="DateTime">
    Time
    <input type="number" name="Time" placeholder="Time">

    <button type="submit" name="button">
</div>
</form>