<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard.index') }}">Admin Diskominfo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard.index') }}">AK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tasks"></i>
                    <span>Profil</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('sejarah.index') }}">Sejarah</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('visimisi.index') }}">Visi Dan Misi</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('sambutan.index') }}">Sambutan Kepala Dinas</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('struktur.index') }}">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="dropdown {{ (request()->segment(2) == 'agenda') ? 'active' : '' }}">
                <a href="{{ route('agenda.index') }}" class="nav-link"><i
                        class="fas fa-clipboard-list"></i><span>Agenda</span></a>
            </li>
            <li class="dropdown {{ (request()->segment(2) == 'galeri') ? 'active' : '' }}">
                <a href="{{ route('galeri.index') }}" class="nav-link"><i
                        class="fas fa-th-large"></i><span>Galeri</span></a>
            </li>
            <li class="dropdown {{ (request()->segment(2) == 'kontak') ? 'active' : '' }}">
                <a href="{{ route('kontak.index') }}" class="nav-link"><i
                        class="far fa-envelope"></i><span>Kontak</span></a>
            </li>
            <li class="dropdown {{ (request()->segment(2) == 'download') ? 'active' : '' }}">
                <a href="{{ route('download.index') }}" class="nav-link"><i
                        class="fas fa-download"></i><span>Download</span></a>
            </li>
            <li
                class="dropdown {{ (request()->segment(2) == 'kategori') ? 'active' : '' }} {{ (request()->segment(2) == 'post') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i>
                    <span>Post</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a></li>
                    <li><a class="nav-link" href="{{ route('post.index') }}">List Post</a></li>
                </ul>
            </li>
            <li class="menu-header">Settings</li>
            <li class="dropdown {{ (request()->segment(2) == 'user') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fas fa-user-cog"></i><span>Users</span></a>
            </li>
            <li class="dropdown {{ (request()->segment(2) == 'setting') ? 'active' : '' }}">
                <a href="{{ route('setting.index') }}" class="nav-link"><i
                        class="fas fa-cog"></i><span>Settings</span></a>
            </li>
        </ul>
    </aside>
</div>