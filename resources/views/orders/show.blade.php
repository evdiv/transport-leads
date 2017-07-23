@extends('layouts.master')

@section ('content')

    <div class="album text-muted">
        <div class="container">

            <h3>{{ $order->title }}</h3>
            <p>{{ $order->description }}</p>

            <div class="comments">
                @foreach($order->comments as $comment)
                    {{ $comment->body }}
                @endforeach
            </div>

            <form method="POST" action="/orders/{{ $order->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea class="form-control" name="body" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>


        </div>
    </div>
@endsection


