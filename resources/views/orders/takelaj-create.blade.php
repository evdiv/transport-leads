@extends('layouts.master')

@section ('content')
	
	@include('layouts.hero')

	<section class="hero">
	  	<div class="hero-body">
		    <div class="container">

		    	<form class="form-horizontal" method="POST" action="{{ route('submit.takelaj') }}">
		    		{{ csrf_field() }}
			    	<form-wizard 
			    		color="#428bca"
                       	title="Lessons Registration Form"
                       	subtitle="To ensure consistency and help ensure your musical success, your weekly lesson is scheduled on the same day and time each week. Please let us know your preferences and we will do our best to find a teacher and time that will work for your schedule."
                       	back-button-text="Go back!"
                       	next-button-text="Go next!"
                       	finish-button-text="We're there">

					  <tab-content title="Request a lesson time">
					    <form-add-cargo></form-add-cargo>
					  </tab-content>

					  <tab-content title="Personal Information">
					      <form-add-address></form-add-address>
					   </tab-content>

					   @if(!Auth::guard('web')->check())
					   <tab-content title="Complete">

						<switcher></switcher>
						
                			@include('orders.partials.create-customer-register')
  
				            <div slot="login">
				                @include('orders.partials.create-customer-login')
				            </div>   


					   </tab-content>
					           @endif  
					</form-wizard>
				</form>

        	</div>
	  	</div>
	</section>

@endsection
