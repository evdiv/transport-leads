@extends('layouts.master')

@section ('content')
	
	@include('layouts.hero')

	<section class="hero">
	  	<div class="hero-body">
		    <div class="container">

		    	<form class="form-horizontal" method="POST" action="{{ route('submit.takelaj') }}">
		    		{{ csrf_field() }}

			    	<add-order-form-wizard>

			    		@if(!Auth::guard('web')->check())
			    			<div slot="first">
								@include('orders.partials.create-customer-login')
							</div>

							<div slot="second">
								@include('orders.partials.create-customer-register')
							</div>
						@endif  

			    	</add-order-form-wizard>
				</form>

        	</div>
	  	</div>
	</section>

@endsection
