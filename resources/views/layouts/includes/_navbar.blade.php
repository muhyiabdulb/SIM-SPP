<div id="app">
  <div class="main-wrapper">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
          </li>
          <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          <div class="search-backdrop"></div>
        </div>
      </form>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
              <a href="#" class="dropdown-item dropdown-item-unread">
                <div class="dropdown-item-icon bg-primary text-white">
                  <i class="fas fa-code"></i>
                </div>
                <div class="dropdown-item-desc">
                  Template update is available now!
                  <div class="time text-primary">2 Min Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-info text-white">
                  <i class="far fa-user"></i>
                </div>
                <div class="dropdown-item-desc">
                  <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                  <div class="time">10 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-success text-white">
                  <i class="fas fa-check"></i>
                </div>
                <div class="dropdown-item-desc">
                  <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                  <div class="time">12 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-danger text-white">
                  <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="dropdown-item-desc">
                  Low disk space. Let's clean it!
                  <div class="time">17 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-info text-white">
                  <i class="fas fa-bell"></i>
                </div>
                <div class="dropdown-item-desc">
                  Welcome to Stisla template!
                  <div class="time">Yesterday</div>
                </div>
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if(Auth::user()->photo)
            <img alt="image" src="{{  Auth::user()->takeImage  }}" class="rounded-circle mr-1">
            @else
            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            @endif
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Logged in 5 min ago</div>
            <a href="{{ route('user.profile.myprofile') }}" class="dropdown-item has-icon">
              <i class="far fa-user"></i> Profile
            </a>
            <a href="{{ route('user.profile.changepassword') }}" class="dropdown-item has-icon">
              <i class="fas fa-bolt"></i> Ubah Password
            </a>
            <a href="#" class="dropdown-item has-icon">
              <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <form class="dropdown-item" id="logout" action="{{ route('logout') }}" method="POST"><i class="lnr lnr-exit"></i>Keluar
              @csrf
            </form>

            <script>
              const onClick = (e) => e.target.submit()
              document.querySelector('#logout').addEventListener('click', onClick)
            </script>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>