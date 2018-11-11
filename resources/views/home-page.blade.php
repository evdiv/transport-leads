@extends('layouts.master')

@section ('content')

    {{-- Intro Text --}}

    <p>Welcome to the Long McQuade Educational Website!</p>
    <p>Below you can see the most recent active orders</p>

    {{-- Orders --}}

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cargo</th>
                <th>Added by</th>
                <th>Location</th>
                <th>Offers</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td><a href="/orders/{{ $order->id }}">{{ $order->id }}</a></td>


                <td>
                    @foreach ($order->cargos as $cargo)
                        <a href="/orders/{{ $order->id }}">
                            {{ $cargo->name }}
                        </a>, Qty: {{ $cargo->quantity }}, Weight: {{ $cargo->weight }} kg.<br/>
                        <small>
                            Dimensions: Length: {{ $cargo->length }}м., Height: {{ $cargo->height }}m., Width:  {{ $cargo->width }}m.
                        </small>
                    @endforeach
                </td>


                <td><a href="/customers/{{ $order->user->id }}">{{ $order->user->name }}</a>
                    <br/><small>at {{ $order->created_at  }}</small>
                </td>


                <td>
                    {{ $order->locations[0]->city }}
                </td>


                <td>
                    {{ $order->proposals()->count() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
