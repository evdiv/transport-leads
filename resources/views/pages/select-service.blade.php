@extends('layouts.master')

@section ('content')
	
    @include('layouts.hero')

	<section class="hero is-medium">
	  	<div class="hero-body">
		    <div class="container">
				<div class="buttons">
  					<a  href="{{ route('create.takelaj') }}" class="button is-success is-large">
  					Register for Lessons 1</a>
  					<a  href="{{ route('carrier.register') }}" class="button is-warning is-large">Register for Lessons 2</a>
  					<a  href="{{ route('carrier.register') }}" class="button is-danger is-large">Register for Lessons 3</a>
				</div>

		    </div>
	  </div>
	</section>

@endsection