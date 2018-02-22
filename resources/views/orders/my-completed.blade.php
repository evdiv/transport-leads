@extends('layouts.master')

@section ('content')

	@include('layouts.hero')

		<section class="section">
		    <div class="container">
		    	
		    	<div class="content">
					<h1>My Completed Lessons</h1>

			  		<div class="notification">

					  	@if($orders->isEmpty())
							<p>You don't have completed orders</p>
					  	@else
				  			<p>We offer private one-on-one lessons custom-tailored to the needs and goals of the individual student as well as a variety of group lessons.</p>
						@endif

					</div>
			  	</div>

		    </div>
	  	</section>


	  	@if(!$orders->isEmpty())
			<!-- Vue JS component for adding multiple goods -->
			<div class="container">
				<orders-table :orders="'{{ $orders }}'"></orders-table>
			</div>
		@endif
	  	
@endsection