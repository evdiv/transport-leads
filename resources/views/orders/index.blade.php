@extends('layouts.master')

@section ('content')

	@include('layouts.hero')

		<section class="section">
		    <div class="container">
		    	<div class="content">
					<h1>Available Lessons</h1>

			  		<div class="notification">
			  			<p>We offer private one-on-one lessons custom-tailored to the needs and goals of the individual student as well as a variety of group lessons. Our students range from children just beginning their journey in music, to those prepping for university, from young adults who just like to sing to seniors who enjoy music and the social aspect. We offer affordable rates and a wide variety of lessons but more importantly, we are a home for anyone who loves music and wants to explore it.</p>
			  		</div>
			  	</div>
		    </div>
	  	</section>
	  	
		<!-- Vue JS component for adding multiple goods -->
		<div class="container">
			<orders-table :orders="'{{ $orders }}'"></orders-table>
		</div>

@endsection


