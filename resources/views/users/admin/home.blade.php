@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div class="list-group">
                <a class="list-group-item active" href="{{ route('home') }}">Active Orders</a>
                <a class="list-group-item" href="{{ route('user.completed.orders')}}">Completed Orders</a>
                <a class="list-group-item" href="{{ route('order.create') }}">Сделать заказ</a>
            </div>

        </div>
        
        <div class="col-md-8">

            @foreach($orders->all() as $order)
                @if(isset($order->takelaj)) 
                    <!-- Display Takelag Order -->
                    @include('users.admin.partials.display-takelaj-order')
                @endif


            @endforeach

        </div><!--/.col-md-8-->
    </div>
</div>
@endsection
