<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('principal') }}" class="logo blue-bg">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{ asset('global/images/logo_small.png') }}" alt=""></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset('global/images/logo.png') }}" width="100%" alt=""></span> </a>
    <!-- Header Navbar -->

    <nav class="navbar blue-bg navbar-static-top">
        <!-- Sidebar toggle button-->
        <ul class="nav navbar-nav pull-left">
            <li><a data-toggle="push-menu" href=""><i class="fas fa-bars"></i></a> </li>
        </ul>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Tasks -->
                <li><a href=""><span id="clock"></span></a></li>
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-play"></i>
                        {{--<span class="label label-danger"> {{ Auth::user()->getTasksPlay()->count()}}</span>--}}
                    </a>
                </li>

                <!-- Notifications  -->
                <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-bell"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Notifications</li>

                    </ul>
                </li>
                <!-- END Notifications  -->

                <!-- User Account  -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->imagepath)
                            <img src="{{ asset(Auth::user()->imagepath) }}" class="user-image" alt="User Image"/>
                        @endif
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">
                            <div class="pull-left dropdown-image">
                                <center>
                                    @if(Auth::user()->imagepath)
                                        <img src="{{ asset(Auth::user()->imagepath) }}" class="img-responsive img-circle" alt="User"/>
                                    @endif
                                </center>
                            </div>
                            <div class="pull-right dropdown-info">
                                <center>
                                    {{ Auth::user()->name }}<br>
                                    <small>{{ Auth::user()->email }}</small>
                                </center>
                            </div>

                        </li>
                        <li><a href="{{ url('/settings') }}"><i class="fas fa-user-tie"></i>  Meu Perfil</a></li>
                        <li>
                            <a href="{{ url('/logout') }}" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Sair do Sistema
                            </a>
                        </li>
                    </ul>
                </li>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="submit" value="logout" style="display: none;">
                </form>

            </ul>
        </div>
    </nav>
</header>