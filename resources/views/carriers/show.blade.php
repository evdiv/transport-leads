@extends('layouts.master')

@section ('content')

    <div class="container">
        <h3>{{ $carrier->name }}</h3>
        <p>Location: {{ $carrier->location }}</p>
        <p>{{ $carrier->description }}</p>
    </div>

@endsection


