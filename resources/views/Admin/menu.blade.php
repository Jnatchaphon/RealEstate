<!-- Brand Logo -->
<a href="{{url('Admin')}}" class="brand-link">
    <img src="{{ url('/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">THAIGUNNERS</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ url('/img/logo-admin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ url('Admin/Profile') }}" class="d-block">Administrator</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('Admin') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Home</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('Admin/News')}}" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>News</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{url('Admin/Columnists')}}" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>Columnists</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{url('Admin/Varieties')}}" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>Varieties</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Players</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('Admin/Leaguetable')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                    <p>League Table</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{url('Admin/Nextmatch')}}" class="nav-link">
                    <i class="fas fa-step-forward nav-icon"></i>
                    <p>Next Match</p>
                </a>
            </li>


            <li class="nav-header">Information</li>
            <li class="nav-item">
                <a href="{{ url('Admin/Profile') }}" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Password.edit',  auth::user()->id)}}" class="nav-link">
                    <i class="nav-icon fas fa-key"></i>
                    <p>Change Password</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
