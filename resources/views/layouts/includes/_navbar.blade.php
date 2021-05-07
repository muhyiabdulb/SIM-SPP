<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                </div>
            </form>
            <ul class="mr-auto navbar-nav">
                @role('pegawai')
                @php
                    $totalSudahBayar = App\Pembayaran::whereHas('detailPembayaran', function ($q) {
                        $q->where('status', 'Sudah DiVerifikasi');
                    })->count();
                @endphp
                <li class="dropdown dropdown-list-toggle">
                    <button type="button" data-toggle="dropdown" class="btn btn-info position-relative beep"><i
                            class="far fa-bell"></i>
                        Pesan
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            {{ $totalSudahBayar }}
                            <span class="visually-hidden">Pesan belum Diverikasi</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-icons">
                            @php
                                $totalNotif = App\Pembayaran::whereHas('detailPembayaran', function ($q) {
                                    $q->where('status', 'Sudah DiVerifikasi');
                                })->get();
                            @endphp
                            @forelse ($totalNotif as $item)
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        @if ($item->user->photo)
                                            <img alt="image" src="{{ $item->user->takeImage }}"
                                                class="rounded-circle mr-1" width="40px" height="40px">
                                        @else
                                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                                class="rounded-circle mr-1" width="40px" height="40px">
                                        @endif
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <p>Nama Ortu : {{ $item->user->name }}</p>
                                        <p>Nama Siswa : {{ $item->siswa->nama_siswa }}</p>
                                        <div class="time text-primary">Publish on
                                            {{ $item->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </a>
                            @empty

                            @endforelse
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                @endrole
            </ul>
            <ul class="navbar-nav navbar-right">
                @role('ortu')
                @php
                    $totalNotif = App\Pembayaran::where('user_id', Auth::user()->id)
                        ->whereHas('detailPembayaran', function ($q) {
                            $q->where('status', 'Nunggak');
                        })
                        ->count();
                @endphp
                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i
                            class="far fa-bell"></i><span class="badge rounded-pill bg-info">{{ $totalNotif }}
                        </span></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-icons">
                            @php
                                $totalNotif = App\Pembayaran::where('user_id', Auth::user()->id)
                                    ->whereHas('detailPembayaran', function ($q) {
                                        $q->where('status', 'Nunggak');
                                    })
                                    ->get();
                            @endphp
                            @forelse ($totalNotif as $item)
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        @if ($item->user->photo)
                                            <img alt="image" src="{{ $item->user->takeImage }}"
                                                class="rounded-circle mr-1" width="40px" height="40px">
                                        @else
                                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                                class="rounded-circle mr-1" width="40px" height="40px">
                                        @endif
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <p>Nama Ortu : {{ $item->user->name }}</p>
                                        <p>Nama Siswa : {{ $item->siswa->nama_siswa }}</p>
                                        <div class="time text-primary">Publish on
                                            {{ $item->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p class="text-center">Tidak Ada Notifikasi</p>
                            @endforelse
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                @endrole
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        @if (Auth::user()->photo)
                            <img alt="image" src="{{ Auth::user()->takeImage }}" class="rounded-circle mr-1">
                        @else
                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
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
                        <form class="dropdown-item" id="logout" action="{{ route('logout') }}" method="POST"><i
                                class="lnr lnr-exit"></i>Keluar
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
