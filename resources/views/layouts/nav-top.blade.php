<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Такелажник</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('order.create') }}">Сделать заказ</a></li>
                <li><a href="{{ route('carrier.register') }}">Регистрация перевозчика</a></li>
                
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                        @if(Auth::guard('web')->check())
                            {{ Auth::user()->name }} 

                        @elseif(Auth::guard('web-carrier')->check())
                            {{ Auth::guard('web-carrier')->user()->name }}

                        @else
                            Войти
                        @endif
                    </a>


                    <ul class="dropdown-menu">
                        <!-- Authentication Links -->
                        @if(Auth::guard('web')->check())
                            <li><a href="{{ route('home') }}">My Orders</a></li> 
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        
                        @elseif(Auth::guard('web-carrier')->check())
                            <li><a href="{{ route('carrier.logout') }}">Carrier Logout</a></li>

                        @elseif(Auth::guard('web-admin')->check())
                            <li><a href="{{ route('admin.logout') }}">Admin Logout</a></li>

                        @else
                            <li><a href="{{ route('carrier.login') }}">Как перевозчик</a></li>
                            <li><a href="{{ route('login') }}">Войти как заказчик</a></li>
                            <li><a href="{{ route('admin.login') }}">Как админ</a></li>

                        @endif
                    </ul>

                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>