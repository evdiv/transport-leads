
@if($proposal->accepted)
	<div class="list-group-item list-group-item-success">
@else
	<div class="list-group-item">
@endif

    <h4 class="list-group-item-heading"><a href="/carriers/{{ $proposal->carrier->id }}">{{ $proposal->carrier->name }}</a>

    	<span class="pull-right">

    		@if($proposal->canBeAccepted())

				<form method="POST" action="/orders/{{ $order->id }}/accept/{{ $proposal->id }}">
					
					{{ csrf_field() }}
					<input type="submit" class="btn btn-xs btn-primary" value="Accept proposal">
				
				</form> 

    		@endif


    		@if($proposal->accepted)
				<i class="fa fa-chevron-circle-down fa-2x text-success" aria-hidden="true"></i>
    		@endif

    	</span>
    </h4>

    <p class="list-group-item-text">
    	<b>{{ $proposal->amount }} USD</b> {{ $proposal->body }}
    </p>

    <p><i>{{ $proposal->created_at }}</i></p>

</div>

