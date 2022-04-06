<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Administrator</title>

    @yield('stylesheet')
</head>
<!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to to the body tag
    to get the desired effect
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->

<body class="hold-transition sidebar-mini layout-footer-fixed">


    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/Admin')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/Admin/Profile')}}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->


                <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color:black;">
                        <i class="fas fa-user nav-icon"></i></a>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ url('Admin/Profile')}}"><button class="dropdown-item" type="button">Profile</button></a>
                        <a href="{{ route('Password.edit',  auth::user()->id)}}"><button class="dropdown-item" type="button">Change Password</button></a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><button
                                class="dropdown-item" type="button">Logout</button></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @yield('menuadmin')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('contentadmin')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        @yield('footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @yield('script')

    @if (session()->has('status'))
    <?php if (session()->get('status') == 'error') { ?>
    <script>
        swal({
            title: "Try Again",
            timer: 1500,
            type: 'error',
            showConfirmButton: false
        }, function () {
            window.location.href = "<?= session()->get('link'); ?>";
        });

    </script>
    <?php } else { ?>
    <script>
        swal({
            title: "Success",
            timer: 1500,
            type: 'success',
            showConfirmButton: false
        }, function () {
            window.location.href = "<?= session()->get('link'); ?>";
        });

    </script>
    <?php } ?>
    @endif

</body>

</html>
