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
            <a class="navbar-brand" href="#">Такелажник</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Клиентам <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="{{ route('create-order') }}">Сделать заказ</a></li>
                        <li><a href="#">История заказов</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Такелажные работы</a></li>
                        <li><a href="#">Грузчики</a></li>
                        <li><a href="#">Автокраны</a></li>
                        <li><a href="#">Манипуляторы</a></li>
                        <li><a href="#">Низкорамные платформы</a></li>
                        <li><a href="#">Погрузчики</a></li>
                        <li><a href="#">Бортовые машины</a></li>

                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">

                @if (Auth::guest())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Войти <span class="caret"></span></a>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                @endif

                    <ul class="dropdown-menu">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Как заказчик</a></li>
                            <li><a href="{{ route('carrier.login') }}">Как перевозчик</a></li>
                            <li><a href="{{ route('admin.login') }}">Как админ</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <li>
                                @if(Auth::guard('web')->check())
                                    <a href="{{ route('logout') }}">Logout</a>
                                @endif

                                @if(Auth::guard('web-admin')->check())
                                    <a href="{{ route('admin.logout') }}">Admin Logout</a>
                                @endif

                                @if(Auth::guard('web-carrier')->check())
                                    <a href="{{ route('carrier.logout') }}">Carrier Logout</a>
                                @endif




                            </li>
                        @endif




                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>