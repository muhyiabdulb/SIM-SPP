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
                <a href="#" class="nav-link"><i class="fa fa-book"></i><span>Data Master</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i> <span>Data Peserta
                        Didik</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('student') }}">Data Siswa</a></li>
                    <li><a href="{{ url('parent') }}">Data Orangtua Siswa</a></li>
                </ul>
            </li>
        </ul>
		@endrole
    </aside>
</div>


<!-- LEFT SIDEBAR -->
{{-- <div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@role('kepsek')
					<li><a href="" class="{{ request()->is('kepsek/dashboard') ? ' active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
					<li>
						<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="subPages" class="collapse ">
							<ul class="nav">
								<li><a href="page-profile.html" class="">Profile</a></li>
								<li><a href="page-login.html" class="">Login</a></li>
								<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
							</ul>
						</div>
					</li>
					<li><a href="" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
				@elserole('ortu')
					<li><a href="" class="{{ request()->is('ortu/dashboard') ? ' active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
				@elserole('pegawai')
					<li><a href="" class="{{ request()->is('pegawai/dashboard') ? ' active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-dice"></i> <span>Transaksi</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-text-format"></i> <span>Laporan</span></a></li>
					<li><a href="" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
				@endrole
			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR --> --}}