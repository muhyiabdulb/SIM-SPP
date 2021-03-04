<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIM SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SPP</a>
        </div>
        <ul class="sidebar-menu">
			@role('ortu')
            <li class="nav-item dropdown">
                <a href="" class="{{ request()->is('ortu/dashboard') ? ' active' : '' }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa fa-book"></i><span>Tunggakan</span></a>
            </li>
             <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa fa-clipboard"></i><span>Konfirmasi</span></a>
            </li>
			@elserole('admin')
			<li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('siswa') }}">Data Siswa</a></li>
                    <li><a href="{{ url('pembimbing') }}">Data Pembimbing Siswa</a></li>
                    <li><a href="{{ url('rombel') }}">Data Rombel</a></li>
                    <li><a href="{{ url('rayon') }}">Data Rayon</a></li>
                    <li><a href="{{ url('jurusan') }}">Data Jurusan</a></li>
                    <li><a href="{{ url('semester') }}">Data Semester</a></li>
                    <li><a href="{{ url('mapel') }}">Data Mapel</a></li>
                    <li><a href="{{ url('jenis') }}">Data Jenis Pembayaran</a></li>
                    <li><a href="{{ url('transfer') }}">Data Via Transfer</a></li>
                </ul>
            </li>
        </ul>
		@endrole
    </aside>
</div>
