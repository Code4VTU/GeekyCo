<header>
    <div class="container">
        <div class="sixteen columns">

            <!-- Logo -->
            <div id="logo">
                <h1><p style="padding-top: 15px">GeekyCo</p></h1>
            </div>

            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">

                    <li><a href="{{ url('/') }}">Начало</a>
                    </li>

                    <li><a href="{{ url('issues') }}">Разгледай</a>
                    </li>

                    <li><a style="background-color: #ef5350; color: white" href="{{ url('issues/create') }}"><i class="fa fa-bell" aria-hidden="true"></i> СЪОБЩИ ПРОБЛЕМ</a></li>
                </ul>


                <ul class="responsive float-right">
                    @if(Auth::guest())
                            <li><a href="{{ url('register') }}"><i class="fa fa-user"></i> Регистрация</a></li>
                            <li><a href="{{ url('login') }}"><i class="fa fa-lock"></i> Вход</a></li>
                    @else
                        <li><a href="{{ url('users/profile', Auth::user()->id) }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                            <ul>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>


            </nav>

            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
            </div>

        </div>
    </div>
</header>