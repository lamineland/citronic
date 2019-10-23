@extends('back.layout')

@section('title','Bienvenue')

@section('css')
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/morris.js/morris.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

@stop


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="wrappwer">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tables des utilisateurs
                    <small>Listes de tous les utilisateurs</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="/stocks">utilisateurs</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content" style="min-height: 80px;">
                <div class="row">
                    <div class="col-xs-12">
                        <a class="btn btn-primary btn-lg" href="{{ route('users.create') }}" role="button">Ajouter un utilisateur</a>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                       <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Les utilisateurs</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @empty($stocks)
                                        <tr>
                                            <p> Le stock est vide !</p>
                                        </tr>
                                    @endempty

                                    @foreach ($users as $user) 
                                        <tr>
                                            
                                            <td>{{ $user->prenom }}</td>
                                            <td>{{ $user->nom }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>Son role</td>
                                            <td>
                                                <button class="btn btn-primary" href="{{ route('users.show',$user->id)}}"><i class="fa fa-eye"></i></button>
                                                <button class="btn btn-info" href="{{ route('users.edit',$user->id)}}"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-warning" href="{{ route('users.destroy',$user->id)}}"><i class="fa fa-remove"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach 

                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('footer')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2019-2020 <a href="https://adminlte.io">Lamine Sané</a>.</strong> Tous droits réservés.
    </footer>

@endsection


@section('javascript')
        <!-- jQuery 3 -->
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('adminlte/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Morris.js charts -->
        <script src="{{ asset('adminlte/bower_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('adminlte/bower_components/morris.js/morris.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap -->
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('adminlte/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!-- datepicker -->
        <script src="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <!-- Slimscroll -->
        <script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
@stop