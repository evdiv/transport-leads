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


				<form method="post" action="/account">

					{{ csrf_field() }}

					<div class="field is-horizontal">
					  <div class="field-label is-normal">
					    <label class="label">Name</label>
					  </div>
					  <div class="field-body">
					    <div class="field">
					      <p class="control">
					        <input class="input" type="text" placeholder="Name" value="{{ old('name', $user->name) }}">
					      </p>
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