<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">

      @if(auth()->user()->is_admin == 1 )
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
          <span>Super Admin</span>
        </h6>
        <a href="/dashboard/addaplikasi/create" class="btn btn-primary mb-3 ms-3">Create new aplication</a>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/notifs*') ? 'active' : '' }}" href="/dashboard/notifs">
              <span data-feather="file-text"></span>
              All Notification
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/baraya*') ? 'active' : '' }}" href="/dashboard/baraya">
              <span data-feather="grid"></span>
              Baraya Travel
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/daytrans*') ? 'active' : '' }}" href="/dashboard/daytrans">
              <span data-feather="grid"></span>
              Day Trans
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/jackal*') ? 'active' : '' }}" href="/dashboard/jackal">
              <span data-feather="grid"></span>
              Jackal Holidays
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/lintas*') ? 'active' : '' }}" href="/dashboard/lintas">
              <span data-feather="grid"></span>
              Lintas Shuttle
            </a>
          </li>
        </ul>
      @endif

      @if(auth()->user()->is_admin == 2 )
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
        <span>Admin Baraya Travel</span>
      </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/notifs*') ? 'active' : '' }}" href="/dashboard/notifs">
              <span data-feather="file-text"></span>
              Baraya Travel
            </a>
          </li>
        </ul>
      @endif

      @if(auth()->user()->is_admin == 3 )
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
        <span>Admin Day Trans</span>
      </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/notifs*') ? 'active' : '' }}" href="/dashboard/notifs">
              <span data-feather="file-text"></span>
              Day Trans
            </a>
          </li>
        </ul>
      @endif

      @if(auth()->user()->is_admin == 4 )
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
        <span>Admin Jackal Holiday</span>
      </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/notifs*') ? 'active' : '' }}" href="/dashboard/notifs">
              <span data-feather="file-text"></span>
              Jackal Holiday
            </a>
          </li>
        </ul>
      @endif

      @if(auth()->user()->is_admin == 5 )
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
        <span>Lintas Shuttle</span>
      </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/notifs*') ? 'active' : '' }}" href="/dashboard/notifs">
              <span data-feather="file-text"></span>
              Lintas Shuttle
            </a>
          </li>
        </ul>
      @endif


      @can('admin')
      
      @endcan

    </div>
  </nav>