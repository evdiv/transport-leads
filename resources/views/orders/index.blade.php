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
                
            </div>   

        @endforeach

    </div>

@endsection

@section ('footer')

    <p>&copy; Footer</p>

@endsection


