<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Our App</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <body>

        @include('layouts.admin.nav-top')

        @include('layouts.errors')

        @yield('content')

        @include('layouts.admin.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
