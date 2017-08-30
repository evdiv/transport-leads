@extends('layouts.master')

@section('content')
<div class="container">

<hr/>
    <div class="row">   

        <div class="col-md-8 col-md-offset-2">

        <div class="row">
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Такелажные работы</button>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Грузчики</button>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg btn-block">Спецтехника</button>
            </div>
        </div>

        <hr />

            <form class="form-horizontal" method="POST" action="{{ route('order.submit') }}">
                {{ csrf_field() }}

                <!-- Takelaj Order Form -->
                @include('orders.partials.create-takelaj')
                    
                 {{-- 

                <!-- Gruzchiki Order Form -->
                @include('orders.partials.create-gruzchiki')


                <!-- Auto Order Form -->
                @include('orders.partials.create-auto')




                 <!-- Loading / Destination Addresses Order Form -->
                @include('orders.partials.create-address')

                 --}}

                 <!-- User Details Form -->
                    @if(!Auth::guard('web')->check())
                        
                        @include('orders.partials.create-customer-details');

                    @endif    


                    <div class="panel panel-default">
                        <div class="panel-heading">Дополнительная информация к заказу</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea name="order-description" 
                                    class="form-control" rows="3"></textarea>
                                </div>    
                            </div>
                        </div>
                    </div>


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
