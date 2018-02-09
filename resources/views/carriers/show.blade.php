@extends('layouts.master')

@section ('content')

	@include('layouts.hero')

		<section class="section">
		    <div class="container">
		    	<div class="content">
			        <h3>{{ $carrier->name }}</h3>

			        <p><i class="fa fa-map-marker"></i> {{ $carrier->city }} {{ $carrier->address }}<br/>
			        <i class="fa fa-envelope"></i> {{ $carrier->email }}<br/>
			        <i class="fa fa-phone"></i> {{ $carrier->phone }}<br/><br/>
			        
			        {{ $carrier->description }}</p>
		    	</div>
		    </div>
	  	</section>
		
@endsection


