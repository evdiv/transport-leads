@extends('layouts.master')

@section ('content')
	
    @include('layouts.hero')

	<section class="section">
	    <div class="container">
	  		<div class="content">

			@if(Session::has('message')) 
				<div> {{ Session::get('message') }}</div>
			@endif


	  			<h1>User Details</h1>

	  			@include('flash::message')

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/account') }}">
  
 					{!! csrf_field() !!}

					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Name</label>
					  </div>
					  <div class="field-body">
					    <div class="field">

					      <div class="control">
					        <input class="input" name="name" type="text" value="{{ old('name', $user->name) }}">
					      </div>

					    </div>
					  </div>
					</div>

    			
					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Phone</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <p class="control">
					        <input class="input" type="text" placeholder="Phone" value="{{ old('phone', $user->phone) }}">
					      </p>
					    </div>
					  </div>
					</div>

					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Email</label>
					  </div>
					  <div class="field-body">
					    <div class="field">

					      <p class="control">
					        <input class="input" type="text" placeholder="Email" value="{{ old('email', $user->email) }}">
					      </p>

					      <div class="control">
					        <input class="input" name="email" type="text" value="{{ old('email', $user->email) }}">
					      </div>
					    </div>
					  </div>
					</div>


					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Phone</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <div class="control">
					        <input class="input" name="phone" type="text" value="{{ old('phone', $user->phone) }}">
					      </div>

					    </div>
					  </div>
					</div>


					<div class="field is-horizontal">
					  <div class="field-label">
					    <!-- Left empty for spacing -->
					  </div>
					  <div class="field-body">

					    <div class="field">
					      <div class="control">
					        <input type="submit" class="button is-primary" value="Update">
					      </div>
					    </div>
					  </div>
					</div>

 				</form>

	  		</div>
	    </div>
  	</section>

@endsection