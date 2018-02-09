@extends('layouts.master')

@section ('content')

	@include('layouts.hero')

		<section class="section">
		    <div class="container">
		    	<div class="content">
					<h1>Carriers</h1>

			  		<div class="notification">
			  			<p>List of our carriers</p>
			  		</div>
			  	</div>
		    </div>
	  	</section>
		
	  	
		<!-- Vue JS component for adding multiple goods -->
		<div class="container">
			<carriers-table :carriers="'{{ $carriers }}'"></carriers-table>
		</div>

@endsection