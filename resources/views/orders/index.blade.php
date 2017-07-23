@extends('layouts.master')

@section ('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary">Main call to action</a>
                <a href="#" class="btn btn-secondary">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">

            @foreach($orders as $order)

                @include('orders.order')

            @endforeach


        </div>
    </div>




@endsection

@section ('footer')

    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>

@endsection


