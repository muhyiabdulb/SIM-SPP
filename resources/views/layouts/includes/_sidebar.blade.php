<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <h5 class="text-dark mt-4">SIM - SPP</h5>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <h5 class="text-dark mt-4">SPP</h4>
        </div>
        <ul class="sidebar-menu">
            @role('ortu')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('ortu/dashboard') ? ' active' : '' }}">
                <a href="{{ route('ortu.dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pembayaran</li>
            <li
                class="nav-item dropdown{{ (request()->is('ortu/pembayaran/history') || request()->is('ortu/pembayaran/bayar') ? ' active' : '') ? ' active' : '' }}">
                <a href="{{ route('ortu.pembayaran.history') }}" class="nav-link"><i
                        class="fas fa-clipboard"></i><span>Pembayaran</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.dashboard') }}" class="nav-link"><i
                        class="fas fa-clipboard"></i><span>Konfirmasi</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown">
                <a href="{{ url('ortu/spp') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan
                        SPP</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('ortu.pembayaran.umum') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan
                        Umum</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('ortu/tunggakan') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan
                        Tunggakan</span></a>
            </li>
            @elserole('admin')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('admin/dashboard') ? ' active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li
                class="nav-item dropdown{{ request()->is('admin/user') || request()->is('admin/siswa') || request()->is('admin/pembimbing') || request()->is('admin/rombel') || request()->is('admin/rayon') || request()->is('admin/jurusan') || request()->is('admin/semester') || request()->is('admin/jenispembayaran') || request()->is('admin/viatransfer') ? ' active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown{{ request()->is('admin/user') ? ' active' : '' }}"><a
                            href="{{ route('admin.user.index') }}">Data User</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/siswa') ? ' active' : '' }}"><a
                            href="{{ route('admin.siswa.index') }}">Data Siswa</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/pembimbing') ? ' active' : '' }}"><a
                            href="{{ route('admin.pembimbing.index') }}">Data Pembimbing Siswa</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/rombel') ? ' active' : '' }}"><a
                            href="{{ route('admin.rombel.index') }}">Data Rombel</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/rayon') ? ' active' : '' }}"><a
                            href="{{ route('admin.rayon.index') }}">Data Rayon</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/jurusan') ? ' active' : '' }}"><a
                            href="{{ route('admin.jurusan.index') }}">Data Jurusan</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/semester') ? ' active' : '' }}"><a
                            href="{{ route('admin.semester.index') }}">Data Semester</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/jenispembayaran') ? ' active' : '' }}"><a
                            href="{{ route('admin.jenispembayaran.index') }}">Data Jenis Pembayaran</a></li>
                    <li class="nav-item dropdown{{ request()->is('admin/viatransfer') ? ' active' : '' }}"><a
                            href="{{ route('admin.viatransfer.index') }}">Data Via Transfer</a></li>
                </ul>
            </li>
            @elserole('kepsek')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('kepsek/dashboard') ? ' active' : '' }}">
                <a href="{{ route('kepsek.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown{{ request()->is('kepsek/laporan/spp') ? ' active' : '' }}">
                <a href="{{ route('kepsek.laporan.spp') }}" class="nav-link"><i class="fas fa-book"></i><span>Laporan
                        SPP</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('kepsek/laporan/umum') ? ' active' : '' }}">
                <a href="{{ route('kepsek.laporan.umum') }}" class="nav-link"><i
                        class="fas fa-clipboard"></i><span>Laporan Umum</span></a>
            </li>
            @elserole('pegawai')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('pegawai/dashboard') ? ' active' : '' }}">
                <a href="{{ route('pegawai.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pembayaran</li>
            <li
                class="nav-item dropdown{{ request()->is('pegawai/pembayaran/history') || request()->is('pegawai/pembayaran/bayar') ? ' active' : '' }}">
                <a href="{{ route('pegawai.pembayaran.history') }}" class="nav-link"><i
                        class="fas fa-money-bill"></i><span>Pembayaran</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown{{ request()->is('pegawai/laporan/spp') ? ' active' : '' }}">
                <a href="{{ route('pegawai.laporan.spp') }}" class="nav-link"><i
                        class="fas fa-book"></i><span>Laporan Bayaran SPP</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('pegawai/laporan/umum') ? ' active' : '' }}">
                <a href="{{ route('pegawai.laporan.umum') }}" class="nav-link"><i
                        class="fas fa-clipboard"></i><span>Laporan Bayaran Umum</span></a>
            </li>
            @elserole('pembimbing')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/dashboard') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Siswa</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/siswa/index') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.siswa.index') }}" class="nav-link"><i
                        class="fas fa-user"></i><span>Data Siswa</span></a>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/laporan/spp') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.laporan.spp') }}" class="nav-link"><i
                        class="fas fa-book"></i><span>Laporan Bayaran SPP</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('pembimbing/laporan/umum') ? ' active' : '' }}">
                <a href="{{ route('pembimbing.laporan.umum') }}" class="nav-link"><i
                        class="fas fa-clipboard"></i><span>Laporan Bayaran Umum</span></a>
            </li>
            @endrole
        </ul>
    </aside>
</div>
