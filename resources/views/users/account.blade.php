@extends('layouts.master')

@section ('content')
	
    @include('layouts.hero')

	<section class="section">
	    <div class="container">
	  		<div class="content">
	  			<h1>User Details</h1>

				<form method="post" action="/account">
				{{ csrf_field() }}
				    <label for="email">Email</label>
    				
    				<input type="email" name="email" value="{{ $user->email }}" />
 

    <input type="submit" value="Edit" />

				</form>


	  			<p>{{ $user->name }}</p>
	  			<p>{{ $user->phone }}</p>
	  			<p>{{ $user->email }}</p>

	  		</div>
	    </div>
  	</section>

@endsection