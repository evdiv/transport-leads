@extends('layouts.master')

@section ('content')

	@include('layouts.hero')
			    	

		<section class="section">
		    <div class="container">
		    	<div class="content">
					<h1>My Complete Lessons</h1>
			  	</div>
		    </div>
	  	</section>
	  	
		<!-- Vue JS component for adding multiple goods -->
		<div class="container">
			<orders-table user-complete-orders="1"></orders-table>
		</div>

@endsection