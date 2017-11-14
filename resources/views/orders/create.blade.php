@extends('layouts.master')

@section('content')
<div class="container">

    <hr/>

    <div class="row">   
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-body">
                    After adding your order to our database you start receiving offers from shippers.
                </div>
            </div>
                

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
            

        </div><!--/.col-md-8 col-md-offset-2 -->

    </div><!--/.row-->

</div><!--/.container-->
@endsection
