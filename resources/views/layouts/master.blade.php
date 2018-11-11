<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Long and McQuade Test Website</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <body>
        <div id="app">
            @include('layouts.nav-top')
            @include('layouts.hero')
            <section class="section">
                <div class="container">
                    <div class="content">

                        @yield('content')

                    </div>
                </div>
            </section>

            @include('layouts.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
