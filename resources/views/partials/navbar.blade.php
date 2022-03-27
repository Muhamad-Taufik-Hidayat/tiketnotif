{{-- Awal Navbar --}}
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/"><span class="text-white"  style="font-weight: bold;">Tiketux Notif</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if (Request::segment(1)=='' ) active @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::segment(1)=='about' ) active @endif" href="/about">About</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>

              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-caret-left-square"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link @if (Request::segment(1)=='login' ) active @endif"><i class="bi bi-caret-right-square"></i> Login</a>
          </li>
        </ul>
        @endauth

    </div>
  </div>
</nav>
{{-- Akhir Navbar --}}