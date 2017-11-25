@extends('layouts.master')

@section ('content')
	
	{{-- Page header  --}}
	<section class="hero is-info">
	  	<div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        Primary title
	      </h1>
	      <h2 class="subtitle">
	        Primary subtitle
	      </h2>
	    </div>
	  </div>
	</section>

	{{-- Intro Text --}}
	<div class="container">
  		<div class="notification">
    		Description of the service.
  		</div>
	</div>

	
	<!-- Vue JS component for adding multiple goods -->
	<div class="container">
		<orders-table></orders-table>
	</div>

@endsection



