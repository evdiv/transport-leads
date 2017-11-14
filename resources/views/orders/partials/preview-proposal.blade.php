
@if($proposal->accepted)
	<div class="list-group-item list-group-item-success">
@else
	<div class="list-group-item">
@endif

    <h4 class="list-group-item-heading"><a href="/carriers/{{ $proposal->carrier->id }}">{{ $proposal->carrier->name }}</a>

            @if($proposal->canBeAccepted())
                <span class="pull-right">
                    <form method="POST" action="/orders/{{ $order->id }}/accept/{{ $proposal->id }}">
                        
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-xs btn-success" value="Принять предложение">
                    
                    </form> 
                 </span>
            @endif     


            @if($proposal->accepted)
                <span class="pull-right">
                    <i class="fa fa-chevron-circle-down fa-3x text-success" aria-hidden="true"></i>
                </span>      
            @endif
    </h4>

        <p class="list-group-item-text">
            <b>{{ $proposal->amount }} USD</b> {{ $proposal->body }}
        </p>

        <p><i>{{ $proposal->created_at }}</i></p>
            
            <hr/>
            @foreach($proposal->messages as $message)
                <p class="{{ $message->postedfrom_type == 'App\Carrier' ? 'text-success' : 'text-warning'}}">
                    {{ $message->created_at }} {{ $message->postedfrom->name }} {{ $message->body }}
                </p>
            @endforeach

    		@if($proposal->canMessageBeAdded())
                <form method="POST" action="/proposals/{{ $proposal->id }}/message">
                    
                    {{ csrf_field() }}
                    <textarea name="body" class="form-control" rows="2"></textarea>
                    <input type="submit" class="btn btn-xs btn-primary" value="{{ Auth::guard('web-carrier')->check() ? 'Ответить Заказчику' : 'Написать перевозчику' }}">
                
                </form> 
    		@endif
    </div>

