  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ATR-BPN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item {{ Request::is('Dashboaard') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('Dashboaard') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>

            </ul>
          </li> --}}

          <li class="nav-item {{ Request::is(['/','list-surat-kosong']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is(['/','list-surat-kosong']) ? 'active' : '' }}">
              
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Surat Keluar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Data Surat</p>
                </a>
              </li>
              @if (Auth::user()->seksi_id == 1)
                <li class="nav-item">
                  <a href="{{ route('listSuratKososng') }}" class="nav-link {{ Request::is('list-surat-kosong') ? 'active' : '' }}">
                    <i class="fas fa-minus nav-icon"></i>
                    <p>Data Surat Kosong</p>
                  </a>
                </li>
              @endif
              
              
            </ul>
          </li>

          <li class="nav-item {{ Request::is(['surat-tugas']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is(['surat-tugas']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>
                Surat Tugas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('suratTugas') }}" class="nav-link {{ Request::is('surat-tugas') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Data Surat tugas</p>
                </a>
              </li>
              
            </ul>
          </li>

         
          
          @if (Auth::user()->seksi_id == 1)
          <li class="nav-item {{ Request::is(['tunjangan-kinerja']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is(['tunjangan-kinerja']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Absensi & Tunjangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('tukin') }}" class="nav-link {{ Request::is('tunjangan-kinerja') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Absensi & Tunjangan</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item {{ Request::is(['user','korsub-kegiatan','jenis-surat','pegawai']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is(['user','korsub-kegiatan','jenis-surat','pegawai']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('korsubKegiatan') }}" class="nav-link {{ Request::is('korsub-kegiatan') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Korsub & Kegiatan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('jenisSurat') }}" class="nav-link {{ Request::is('jenis-surat') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Jenis Surat</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('pegawai') }}" class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              
            </ul>
          </li>
          @endif

          

          

          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> --}}
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>