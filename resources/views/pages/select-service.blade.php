@extends('layouts.master')

@section ('content')
	
    @include('layouts.hero')

	<section class="hero">
	  	<div class="hero-body">
		    <div class="container">

		    	<div class="content">
					<h1>Select Required Service</h1>

					<p>Content of the Page</p>

					<div class="buttons">

	  					<a  href="{{ route('create.takelaj') }}" class="button is-link">
	  						<i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;
	  						Guitar Lessons Registration
	  					</a>

	  					<a  href="#" class="button is-link">
	  						<i class="mdi mdi-forklift"></i>&nbsp;
	  						Keyboard Lessons Registration
	  					</a>

	  					<a  href="#" class="button is-link">
	  						<i class="mdi mdi-account-multiple"></i>&nbsp;
	  						Vocal Lessons Registration
	  					</a>

					</div>

				</div>

		    </div>
	  </div>
	</section>

@endsection