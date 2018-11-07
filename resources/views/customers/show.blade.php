@extends('layouts.master')

@section ('content')

    @include('layouts.hero')

    <section class="section">
        <div class="container">
            <div class="content">

                <h3>{{ $user->name }}</h3>
                <small>Registered: {{ $user->created_at }}.<br/>
                    Created {{ count($user->orders) }} orders</small>

                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Added</th>
                            <th>Details</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->orders as $order)
                            <tr>
                                <td><a href="/orders/{{ $order->id }}">{{ $order->id }}</a></td>
                                <td>{{ $order->created_at  }}</td>
                                <td>
                                    @php ($cargoCounter = 0)
                                    @foreach ($order->cargos as $cargo)
                                        <p>
                                            <b>#{{ ++$cargoCounter }} {{ $cargo->name }}</b> -
                                                {{ $cargo->description }}<br/>
                                            <span>
                                                weight: {{ $cargo->weight }},
                                                length: {{ $cargo->length }},
                                                height: {{ $cargo->height }},
                                                width:  {{ $cargo->width }},
                                                quantity: {{ $cargo->quantity }}
                                            </span>
                                        </p>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($order->completed == 1)
                                        Completed
                                    @elseif($order->in_process == 1)
                                        In Progress
                                    @else
                                        <a href="/orders/{{ $order->id }}" class='button is-success'>Open</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
