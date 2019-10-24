  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image') }}">
                </div>
                <div class="pull-left info">
                    <p>{{ isset(Auth::user()->prenom) ? Auth::user()->prenom : Auth::user()->email }}</p>
                    <a href="/"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Bienvenue</li>
                <li><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="/stocks"><i class="fa fa-cube text-green"></i> <span>Gestion des stock</span></a></li>
                <li><a href="/ventes"><i class="fa fa-cube text-green"></i> <span>Ventes</span></a></li>
                
                <li><a href="/users"><i class="fa fa-cube text-green"></i> <span>Gestion des utilisateurs</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>