<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('backend/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item{{ request()->is('panel') ? ' active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Pengguna</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('panel/pengaduan') ? ' active' : '' }}">
                    <a href="{{ route('pengaduan') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Pengaduan</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('panel/pengaduan') ? ' active' : '' }}">
                    <form action="{{route('proses.logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block"> <i class="fas fa-sign-out-alt mt-2"></i> Logout</button>
                    </form>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>