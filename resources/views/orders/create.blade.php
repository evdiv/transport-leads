@extends('layouts.master')

@section('content')
<div class="container">

<hr/>
    <div class="row">   

        <div class="col-md-8 col-md-offset-2">

        <div class="alert alert-success" role="alert">After adding your order to our database you start receiving offers from shippers.</div>

        <!-- JS Buttons for selecting the required Service -->
        <buttons-select-service></buttons-select-service>

        <hr />

            <form class="form-horizontal" method="POST" action="{{ route('order.submit') }}">
                {{ csrf_field() }}

                <!-- JS Takelaj Order Form  -->
                <form-add-takelaj></form-add-takelaj>


                <!-- JS Gruzchiki Order Form  -->
                <form-add-gruzchiki></form-add-gruzchiki>


                <!-- JS Special Equipment Order Form  -->
                <form-add-auto></form-add-auto>


                <!-- Order Description -->
                <div class="panel panel-default">
                    <div class="panel-heading">Order Description</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea name="note" 
                                class="form-control" rows="3"></textarea>
                            </div>    
                        </div>
                    </div>
                </div>
                

                <!-- JS Loading / Destination Addresses Order Form -->
                <form-add-address></form-add-address>


                <!-- User Details Form -->
                @if(!Auth::guard('web')->check())
                        
                    @include('orders.partials.create-customer-details');

                @endif    


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                    <br/>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Добавить заказ
                        </button>
                    </div>
                </div>


            </form>

        </div>
    </div>
</div>
@endsection
