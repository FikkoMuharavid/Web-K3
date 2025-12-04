<!-- resources/views/components/navbar.blade.php (Bootstrap Version) -->
<nav class="navbar navbar-expand-lg" style="background-color:#15406A; font-family: 'Poppins', sans-serif;">
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <div class="container-fluid px-4 py-2">

        <!-- Logo & Text -->
        <div class="d-flex align-items-center">
            <img src="/images/logo.png" alt="Logo" style="height:50px;" class="me-3">
            <div class="text-white lh-1">
                <div style="font-size:12px;">Direktorat Jenderal Pembinaan</div>
                <div style="font-size:12px;">Pengawasan Ketenagakerjaan dan K3</div>
                <div style="font-size:16px; font-weight:600;">Balai K3 Surabaya</div>
            </div>
        </div>

        <!-- Toggler -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3" style="font-size:18px; font-weight:500;">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Beranda</a>
                </li>

                <!-- Pelayanan Dropdown -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="daftar_pelayanan">Pelayanan</a>
                </li>

                <!-- Tentang Kami Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Tentang Kami</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/visi_misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/alur_pelayanan">Alur Pelayanan</a></li>
                         <li><a class="dropdown-item" href="/sarana_prasarana">Sarana Prasarana</a></li>
                    </ul>
                </li>

                <!-- Kontak -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/kontak">Kontak</a>
                </li>

                <!-- Notification Icon -->
               <i class="bi bi-house-door-fill" style="color: ffffff;"></i>
                    <a href="#" class="text-white fs-4"></a>
                </li>

                <!-- User Icon -->
                <i class="bi bi-person-circle" style="color: #ffffff;"></i>
                    <a href="#" class="text-white fs-4"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
