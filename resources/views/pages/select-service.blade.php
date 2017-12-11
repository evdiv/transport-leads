@extends('layouts.master')

@section ('content')
	
    @include('layouts.hero')

	<section class="hero">
	  	<div class="hero-body">
		    <div class="container">
				<div class="buttons">
  					<a  href="{{ route('create.takelaj') }}" class="button is-link">
  					Lesson Registration</a>
  					<a  href="#" class="button is-link">Lesson Registration</a>
  					<a  href="#" class="button is-link">Lesson Registration</a>
				</div>

		    </div>
	  </div>
	</section>

@endsection