
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemilihan Raya FMIPA </title>
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('assets/application/bower_components/bootstrap/dist/css/bootstrap.min.css ') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/application/bower_components/font-awesome/css/font-awesome.min.css ') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/application/bower_components/Ionicons/css/ionicons.min.css ') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/application/dist/css/AdminLTE.min.css ') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('assets/application/dist/css/skins/_all-skins.min.css ') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
            <a href="{{ route('mahasiswa.dashboard') }}" class="navbar-brand"><b>Pemira </b>Fakultas MIPA</a>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
         
         
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
        

    
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset('assets/application/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">
                    @yield('user-login')
                </span>
                <ul class="dropdown-menu" style="padding: 0px !important">
                  
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          <a href="#" style="padding:0px !important;">@yield('user-login2')</a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-right">
                          @yield('logout')
                      </div>
                    </li>
                  </ul>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pemira FMIPA
          <small>Pemilihan Raya FMIPA Universitas Bengkulu</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard Pemilih</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Selamat Datang, {{ Session::get('nama') }}</h4>

          <p>
            Mohon dengan hormat untuk memilih salah satu kandidat yang tercantum di bawah ini sesuai dengan pertimbangan hati dan kesadaran Anda. Kami ingin mengingatkan bahwa setelah Anda membuat pilihan, tidak akan mungkin untuk membatalkannya. Terima kasih atas partisipasi Anda dalam proses ini.
        </p>
        </div>
        
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar Kandidat Pemira Fakultas MIPA 2023</h3>
          </div>
          <div class="box-body">
            @yield('content')
              <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>FMIPA</b> Universitas Bengkulu
      </div>
      <strong>Copyright &copy; 2023 <a href="https://science.unib.ac.id/">FMIPA Universitas Bengkulu</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('assets/application/bower_components/jquery/dist/jquery.min.js ') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/application/bower_components/bootstrap/dist/js/bootstrap.min.js ') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('assets/application/bower_components/jquery-slimscroll/jquery.slimscroll.min.js ') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/application/bower_components/fastclick/lib/fastclick.js ') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/application/dist/js/adminlte.min.js ') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/application/dist/js/demo.js ') }}"></script>
</body>
</html>