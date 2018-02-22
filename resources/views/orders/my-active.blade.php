@extends('layouts.master')

@section ('content')

	@include('layouts.hero')

		<section class="section">
		    <div class="container">
		    	<div class="content">
					<h1>My Active Lessons</h1>

					  @if($orders->isEmpty())
						<div class="notification">
							You don't have active orders
						</div>
					@endif

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
