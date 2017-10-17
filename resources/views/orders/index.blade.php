@extends('layouts.master')

@section ('content')

    <div class="container">

        @foreach($orders as $order)

            <div class="panel panel-default">
              <!-- Order for Takelaj -->
                @if(isset($order->takelaj)) 
                    @include('orders.partials.preview-takelaj')
                @endif

                <!-- Order for Gruzchiki -->
                @if(isset($order->gruzchiki)) 
                    @include('orders.partials.preview-gruzchiki')
                @endif

                <!-- Order for Auto and Special Equipment -->
                @if(isset($order->auto)) 
                    @include('orders.partials.preview-auto')
                @endif

                @if(Auth::guard('web-carrier')->check())
                
                    <!-- JS Add Carrier Proposal -->
                    <form-add-carrier-proposal></form-add-carrier-proposal>
                
                @endif
            </div>   

        @endforeach

    </div>

@endsection

@section ('footer')

    <p>&copy; Footer</p>

@endsection


