<nav class="navbar navbar-expand-lg" 
     style="background-color:#15406A; font-family:'Poppins', sans-serif; z-index:9999;">
    <div class="container-fluid px-4 py-2">

        <!-- Logo -->
        <div class="d-flex align-items-center">
            <img src="/images/logo.png" alt="Logo" style="height:50px;" class="me-3">
            <div class="text-white lh-1">
                <div style="font-size:12px;">Direktorat Jenderal Pembinaan</div>
                <div style="font-size:12px;">Pengawasan Ketenagakerjaan dan K3</div>
                <div style="font-size:16px; font-weight:600;">Balai K3 Surabaya</div>
            </div>
        </div>

        <!-- Toggler -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3" style="font-size:18px; font-weight:500;">
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/daftar_pelayanan">Pelayanan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">Tentang Kami</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/visi_misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/alur_pelayanan">Alur Pelayanan</a></li>
                        <li><a class="dropdown-item" href="/sarana_prasarana">Sarana Prasarana</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/kontak">Kontak</a>
                </li>

                {{-- Guest --}}
                @guest
                    <li class="nav-item">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="btn btn-outline-light">Daftar</a>
                    </li>
                @endguest

                {{-- Authenticated User --}}
                @auth
                    {{-- Notification --}}
                    <li class="nav-item">
                        <a href="/notifikasi" class="btn btn-outline-light position-relative">
                            <i class="bi bi-bell-fill"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>

                    {{-- Profile Dropdown --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li class="dropdown-item-text fw-semibold">{{ auth()->user()->name }}</li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

