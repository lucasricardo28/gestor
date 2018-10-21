<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="image text-center">
                    @if(Auth::user()->imagepath)
                        <img src="{{ asset(Auth::user()->imagepath) }}" class="img-circle" alt="User Image"/>
                    @endif
                </div>
                <div class="info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="{{ url('/settings') }}"><i class="fa fa-circle text-success"></i> {{ trans('message.online') }}</a>
            </div>

    @endif

    <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree" data-animation-speed="500">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            @can('dashboard.index')
                <li class="active"><a href="{{ route('dashboard.index') }}"><i class='fa fa-home'></i> <span> Inicial</span></a></li>
            @endcan
            @can('strategic.index')
                <li><a href="{{ route('strategics.index') }}"><i class='fa fa-home'></i> <span> Estratégia</span></a></li>
            @endcan
            @can('clients.index')
                <li><a href="{{ route('clients.index') }}"><i class='fa fa-users'></i> <span> Clientes</span></a></li>
            @endcan
            @can('services.index')
                <li><a href="{{ route('services.index') }}"><i class="fas fa-crosshairs"></i><span> Serviços</span></a></li>
            @endcan
            @can('budgets.index')
                <li><a href="{{ route('budgets.index') }}"><i class='fa fa-upload'></i><span>Orçamentos</span></a></li>
            @endcan

            @can('bills.pay')
                <li><a href="{{route('bills.index')}}"> <i class="ion ion-ios-calculator"></i><i class="fas fa-money-bill-alt" aria-hidden="true"></i> Contas</a></li>
                {{--<li class="treeview">--}}
                    {{--<a href="#"><i class="fas fa-money-bill-alt"></i><span> Financeiro</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                    {{--<ul class="treeview-menu">--}}




                        {{--<li><a href="{{route('bills.pay')}}"> <i class="ion ion-ios-calculator"></i><i class="fa fa-angle-down" aria-hidden="true"></i>Contas a Pagar</a></li>--}}

                        {{--<li><a href="{{route('bills.receive')}}"> <i class="ion ion-ios-calculator"></i><i class="fa fa-angle-up" aria-hidden="true"></i>Contas a Receber</a></li>--}}
                        {{--<li><a href="{{route('cash.flow')}}"> <i class="ion ion-ios-calculator"></i> Fluxo de Caixa</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            @endcan
            @can('projects.index')
                <li class="treeview">
                    <a href="#"><i class="fa fa-plane" aria-hidden="true"></i><span>Projetos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('projects.index')}}"><i class="fa fa-plane" aria-hidden="true"></i>&nbsp; Projetos</a></li>
                        <li><a href="{{route('tasks.index')}}"> <i class="fa fa-table" aria-hidden="true"></i> &nbsp; Tarefas</a></li>
                        <li><a href="{{route('tests.index')}}"> <i class="fa fa-check-square" aria-hidden="true"></i> &nbsp; Testes</a></li>
                    </ul>
                </li>
            @endcan


            <li class="treeview">
                <a href="#"><i class="fas fa-chart-line"></i> <span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    @can('reports.index')
                        <li><a href="{{route('report.index')}}"> <i class="fas fa-chart-bar"></i>&nbsp;Relatório da Equipe </a></li>
                        <li><a href="{{route('report.byproject')}}"> <i class="fas fa-chart-area"></i> &nbsp; Relatório da Por Projeto </a></li>
                        <li><a href="{{route('report.byuser')}}"> <i class="fas fa-chart-line"></i> &nbsp; Seu Relatório </a></li>
                        <li><a href="{{route('report.getByDate')}}"> <i class="fas fa-chart-pie"></i>&nbsp;  Relatório mensal </a></li>
                    @endcan
                </ul>
            </li>
            @can('workers.index')
                <li class="treeview">
                    <a href="#"><i class="fas fa-users-cog"></i> <span>Administração</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        @can('user.index')
                            <li><a href="{{route('users.index')}}"> <i class="fa fa-users"></i> Usuários</a></li>
                        @endcan
                        @can('roles.index')
                            <li><a href="{{route('roles.index')}}"> <i class="fa fa-users"></i> Funções</a></li>
                        @endcan
                        @can('skills.index')
                            <li><a href="{{ route('skills.index') }}"><i class='fa fa-upload'></i> <span>Habilidades</span></a></li>
                        @endcan
                        @can('workers.index')
                            <li><a href="{{ route('workers.index') }}"><i class='ion ion-ios-people-outline'></i> <span>Pessoas</span></a></li>
                        @endcan
                        @can('permissions.index')
                            <li><a href="{{route('permissions.index')}}"> <i class="fa fa-columns"></i> Permições</a></li>
                        @endcan

                    </ul>
                </li>
            @endcan
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
