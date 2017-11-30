@extends('layouts.master')

@section ('content')
	
	@include('layouts.hero')

	<section class="hero is-medium">
	  	<div class="hero-body">
		    <div class="container">

		    	<form class="form-horizontal" method="POST" action="{{ route('submit.takelaj') }}">
		    		{{ csrf_field() }}
			    	<form-wizard>
					  <tab-content title="Add Cargo">
					    My first tab content
					    <form-add-cargo></form-add-cargo>
					  </tab-content>
					  <tab-content title="Additional Info">
					      My second tab content
					      <form-add-address></form-add-address>
					   </tab-content>

					   @if(!Auth::guard('web')->check())
					   <tab-content title="Last step">
					     Yuhuuu! This seems pretty damn simple


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
