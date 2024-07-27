<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        PemBuk
      </a>      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (Route::is('home')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('ditandai')) ? 'active' : '' }}" href="/ditandai">Ditandai</a>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/ditandai">Ditandai</a>
          </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('daftar_peminjaman')) ? 'active' : '' }}" href="/daftar_peminjaman">Daftar Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/komunitas">Komunitas</a>
          </li>
          @auth
            @if (auth()->user()->role === 'admin')
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">Dashboard Admin</a>
              </li>
            @endif
          @endauth
        </ul>
        <form class="d-flex" role="search" method="GET" action="/cari">
          @csrf
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="/logout" class="btn btn-warning">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="/login" class="btn btn-warning">Login</a>
            <a href="/register" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
</nav>