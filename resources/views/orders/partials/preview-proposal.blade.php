
<div class="list-group-item">

    <h4 class="list-group-item-heading"><a href="/carriers/{{ $proposal->carrier->id }}">{{ $proposal->carrier->name }}</a></h4>

    <p class="list-group-item-text">
    	<b>{{ $proposal->amount }} USD</b> {{ $proposal->body }}
    </p>

    <p><i>{{ $proposal->created_at }}</i></p>

</div>