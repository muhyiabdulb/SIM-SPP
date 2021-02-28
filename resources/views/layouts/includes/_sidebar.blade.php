<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
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
<!-- END LEFT SIDEBAR -->