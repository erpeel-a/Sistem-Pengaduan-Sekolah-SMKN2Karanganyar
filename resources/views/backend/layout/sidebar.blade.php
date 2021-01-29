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

                @if (Auth::user()->role ==='admin')
                <li class="sidebar-item  has-sub{{ request()->is('panel/masterdata/*') ? ' active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="submenu{{ request()->is('panel/masterdata/*') ? ' active' : '' }}">
                        <li class="submenu-item{{ request()->is('panel/masterdata/petugas*') ? ' active' : '' }}">
                            <a href="{{ route('data.petugas') }}">Data Petugas</a>
                        </li>
                        <li class="submenu-item{{ request()->is('panel/masterdata/users*') ? ' active' : '' }}">
                            <a href="{{ route('data.users') }}">Data User</a>
                        </li>
                    </ul>
                </li>
                @endif

                <li class="sidebar-item{{ request()->is('panel/pengaduan*') ? ' active' : '' }}">
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