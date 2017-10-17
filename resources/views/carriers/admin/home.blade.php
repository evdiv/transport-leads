@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div class="list-group">

                <a class="list-group-item {{ !empty($allMessages) ? 'active': '' }}" href="#">Massages</a>

                <a class="list-group-item {{ !empty($active) ? 'active': '' }}" href="{{ route('home') }}">Active Orders</a>

                <a class="list-group-item {{ !empty($completed) ? 'active': '' }}" href="{{ route('user.completed.orders')}}">Completed Orders</a>

            </div>

        </div>
        
        <div class="col-md-8">

			@foreach($messages as $message)
                    @include('messages.preview')
            @endforeach


            @foreach($orders as $order)

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

            @endforeach

        </div><!--/.col-md-8-->
    </div>
</div>

@endsection
