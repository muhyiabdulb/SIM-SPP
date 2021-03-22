<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIM - SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SPP</a>
        </div>
        <ul class="sidebar-menu">
			@role('ortu')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i class="fas fa-clipboard"></i><span>Pembayaran</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i class="fas fa-clipboard"></i><span>Konfirmasi</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan SPP</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan Umum</span></a>
            </li>
             <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i class="fas fa-book"></i><span>Tunggakan</span></a>
            </li>
			@elserole('admin')
			<li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? ' active' : '' }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.user.index') }}">Data User</a></li>
                    <li><a href="{{ route('admin.siswa.index') }}">Data Siswa</a></li>
                    <li><a href="{{ route('admin.pembimbing.index') }}">Data Pembimbing Siswa</a></li>
                    <li><a href="{{ route('admin.rombel.index') }}">Data Rombel</a></li>
                    <li><a href="{{ route('admin.rayon.index') }}">Data Rayon</a></li>
                    <li><a href="{{ route('admin.jurusan.index') }}">Data Jurusan</a></li>
                    <li><a href="{{ route('admin.semester.index') }}">Data Semester</a></li>
                    <li><a href="{{ route('admin.jenispembayaran.index')}}">Data Jenis Pembayaran</a></li>
                    <li><a href="{{ route('admin.viatransfer.index') }}">Data Via Transfer</a></li>
                </ul>
            </li>
            @elserole('kepsek')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('kepsek.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown">
                <a href="{{ route('kepsek.dashboard') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan SPP</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('kepsek.dashboard') }}" class="nav-link"><i class="fas fa-clipboard"></i><span>Laporan Umum</span></a>
            </li>
            @elserole('pegawai')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('pegawai/dashboard') ? ' active' : '' }}">
                <a href="{{ route('pegawai.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pembayaran</li>
            <li class="nav-item dropdown{{ request()->is('pegawai/pembayaran/history') || request()->is('pegawai/pembayaran/bayar') ? ' active' : '' }}">
                <a href="{{ route('pegawai.pembayaran.history') }}" class="nav-link"><i class="fas fa-money-bill"></i><span>Pembayaran</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown{{ request()->is('pegawai/laporan/spp') ? ' active' : '' }}">
                <a href="{{ route('pegawai.laporan.spp') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan Bayaran SPP</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('pegawai/laporan/umum') ? ' active' : '' }}">
                <a href="{{ route('pegawai.laporan.umum') }}" class="nav-link"><i class="fas fa-clipboard"></i><span>Laporan Bayaran Umum</span></a>
            </li>
            @elserole('pembimbing')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/dashboard') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Siswa</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/siswa/index') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.siswa.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Data Siswa</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/laporan/spp') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.laporan.spp') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan Bayaran SPP</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/laporan/umum') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.laporan.umum') }}" class="nav-link"><i class="fas fa-clipboard"></i><span>Laporan Bayaran Umum</span></a>
            </li>
            @endrole
        </ul>
    </aside>
</div>
