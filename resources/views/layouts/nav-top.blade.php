
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="/">Long & McQuade Test</a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('about') }}">About</a>
                <a class="navbar-item" href="{{ route('orders') }}">Lessons</a>
                <a class="navbar-item" href="{{ route('select.service') }}">Create Lesson</a>
                <a class="navbar-item" href="{{ route('carrier.register') }}">Registration</a>
            </div>
        </div>


        <div class="navbar-menu">
            <div class="navbar-end">

                <a class="navbar-item" href="{{ route('contact') }}">Contact</a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="#" class="navbar-link">

                        @if(Auth::guard('web')->check())
                            {{ Auth::user()->name }} 

                        @elseif(Auth::guard('web-carrier')->check())
                            {{ Auth::guard('web-carrier')->user()->name }}

                        @else
                            Sign-In
                        @endif
                    </a>
                    
                    <div class="navbar-dropdown is-boxed">
                        <!-- Authentication Links -->
                        @if(Auth::guard('web')->check())
                            <a class="navbar-item" href="{{ route('home') }}">My Orders</a> 
                            <a class="navbar-item" href="{{ route('logout') }}">Logout</a>
                        
                        @elseif(Auth::guard('web-carrier')->check())
                            <a class="navbar-item" href="{{ route('carrier.logout') }}">Carrier Logout</a>

                        @elseif(Auth::guard('web-admin')->check())
                            <a class="navbar-item" href="{{ route('admin.logout') }}">Admin Logout</a>

                        @else
                            <a class="navbar-item" href="{{ route('carrier.login') }}">As Teacher</a>
                            <a class="navbar-item" href="{{ route('login') }}">As User</a>
                            <a class="navbar-item" href="{{ route('admin.login') }}">As Admin</a>

                        @endif
                    </div>


                </div>
            </div>
        </div>

        <button class="button navbar-burger">
          <span></span> 
          <span></span>
          <span></span>
        </button>
        
    </div>
</nav>

