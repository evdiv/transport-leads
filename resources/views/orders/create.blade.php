@extends('layouts.master')

@section('content')

    After adding your order to our database you start receiving offers from shippers.

    <form-add-order>
        <div slot="form-add-order-open">
            <form class="form-horizontal" method="POST" action="{{ route('order.submit') }}">
            {{ csrf_field() }}
        </div>


        @if(!Auth::guard('web')->check())

            <div slot="register">
                @include('orders.partials.create-customer-register')
            </div>   
             
            <div slot="login">
                @include('orders.partials.create-customer-login')
            </div>   

        @endif  
    </form-add-order>
            
@endsection
