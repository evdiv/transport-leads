@extends('layouts.master')

@section ('content')

    <div class="album text-muted">
        <div class="container">
            
              <!-- Order for Takelaj -->
                @if(isset($order->takelaj)) 
                    @include('orders.partials.display-takelaj')
                @endif

                <!-- Order for Gruzchiki -->
                @if(isset($order->gruzchiki)) 
                    @include('orders.partials.display-gruzchiki')
                @endif

                <!-- Order for Auto and Special Equipment -->
                @if(isset($order->auto)) 
                    @include('orders.partials.display-auto')
                @endif

                @if(Auth::guard('web-carrier')->check())
                
                    <!-- JS Add Carrier Proposal -->
                    <form-add-carrier-proposal></form-add-carrier-proposal>
                
                @endif 

            <div class="comments">
                @foreach($order->comments as $comment)
                    {{ $comment->body }}
                @endforeach
            </div>

        </div>
    </div>
@endsection


