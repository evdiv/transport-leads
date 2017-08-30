@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>

                <div class="panel-body">
                   <ul>
                        <li>Link</li>
                        <li>Link</li>
                        <li>Link</li>
                        <li>Link</li>
                        <li>Link</li>
                        <li>Link</li>
                   </ul>
                </div>
            </div>
        </div>
        


        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul>
                        @foreach($orders->all() as $order)
                            <li>{{ $order->created_at }}</li>
                        @endforeach
                    </ul>

                    {{ dump($orders) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
