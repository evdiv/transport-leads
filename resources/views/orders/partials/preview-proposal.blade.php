
<a href="#" class="list-group-item">

    <h4 class="list-group-item-heading">{{ $proposal->carrier->name }}  {{ $proposal->amount }} USD</h4>

    <p class="list-group-item-text">{{ $proposal->body }}</p>
    <p>{{ $proposal->created_at }}</p>

</a>