
@if($comment->commentable_type == "App\Carrier")
	<li class="list-group-item list-group-item-warning">
@else
	<li class="list-group-item list-group-item-info">
@endif

    <h5>{{ $comment->commentable->name }} </h5>
    <p><i>{{ $comment->created_at }} </i> {{ $comment->body }}</p>

</li>

