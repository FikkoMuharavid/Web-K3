<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pelayanan K3</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
