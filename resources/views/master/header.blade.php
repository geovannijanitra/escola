<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('fn')}}/assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="{{asset('fn')}}/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Escola</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">SMP 77 Uhuy</li>
            <li class="dropdown active">
              <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Kelola Admin</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/kegiatan">Data Kegiatan</a></li>
                <li><a class="nav-link" href="/pengumuman">Data Pengumuman</a></li>
                <li><a class="nav-link" href="/user">Data User</a></li>
                <li><a class="nav-link" href="/siswa">Data Siswa</a></li>
                <li><a class="nav-link" href="/gurumapel">Data Guru</a></li>
                <li><a class="nav-link" href="/mapel">Data Mata Pelajaran</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Pembelajaran</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/tugas">Tugas</a></li>
              </ul>
            </li>
            <li>
              <a href="/kritik" class=" nav-link "><i data-feather="mail"></i><span>Kritik dan Saran</span></a>
            </li>
          </ul>
        </aside>
      </div>
