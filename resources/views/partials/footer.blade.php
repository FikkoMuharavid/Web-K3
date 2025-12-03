{{-- resources/views/components/footer.blade.php --}}
<footer class="text-white mt-5 py-4" style="background-color:#15406A;">
    <div class="container">
        <div class="row gy-4">

            {{-- kolom kiri: logo + nama lembaga + alamat --}}
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start mb-3">
                    <img src="{{ asset('images/Logo.png') }}"
                         alt="Logo Balai K3 Surabaya"
                         style="height:50px;"/>
                </div>

                <div style="font-size:14px; line-height:1.4;">
                    <div>Direktorat Jenderal Pembinaan</div>
                    <div>Pengawasan Ketenagakerjaan dan K3</div>
                    <div style="font-weight:600;">Balai K3 Surabaya</div>
                </div>

                <div class="mt-3" style="font-size:14px; line-height:1.4;">
                    Jl. Dukuh Menanggal Sel. No.122, Dukuh Menanggal,
                    <br>Kec. Gayungan, Surabaya, Jawa Timur 60234
                </div>
            </div>

            {{-- kolom Eksplor --}}
            <div class="col-6 col-md-2">
                <h6 class="fw-semibold mb-3" style="font-size:16px;">Eksplor</h6>
                <ul class="list-unstyled mb-0" style="font-size:14px; line-height:1.6;">
                    <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Pelayanan</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
                    <li><a href="/kontak" class="text-white text-decoration-none">Kontak</a></li>
                </ul>
            </div>

            {{-- kolom Informasi --}}
            <div class="col-6 col-md-2">
                <h6 class="fw-semibold mb-3" style="font-size:16px;">Informasi</h6>
                <ul class="list-unstyled mb-0" style="font-size:14px; line-height:1.6;">
                    <li><a href="#" class="text-white text-decoration-none">Profile Perusahaan</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Visi dan Misi</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Sarana dan Prasarana</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Struktur Organisasi</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Alur Pelayanan</a></li>
                </ul>
            </div>

            {{-- kolom Kontak --}}
            <div class="col-12 col-md-4">
                <h6 class="fw-semibold mb-3" style="font-size:16px;">Kontak</h6>
                <ul class="list-unstyled mb-0" style="font-size:14px; line-height:1.6;">
                    <li class="d-flex align-items-center gap-2">
                        {{-- Instagram --}}
                        <span class="fs-5">
                            <i class="bi bi-instagram"></i>
                        </span>
                        <a href="https://www.instagram.com/balaihiperkessby"
                           target="_blank"
                           class="text-white text-decoration-none">
                            balaihiperkessby
                        </a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        {{-- Facebook --}}
                        <span class="fs-5">
                            <i class="bi bi-facebook"></i>
                        </span>
                        <a href="https://www.facebook.com/Balai-Hiperkes-dan-KK-Surabaya"
                           target="_blank"
                           class="text-white text-decoration-none">
                            Balai Hiperkes dan KK Surabaya
                        </a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        {{-- TikTok --}}
                        <span class="fs-5">
                            <i class="bi bi-tiktok"></i>
                        </span>
                        <a href="https://www.tiktok.com/@balaihiperkessby"
                           target="_blank"
                           class="text-white text-decoration-none">
                            balaihiperkessby
                        </a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        {{-- Telepon --}}
                        <span class="fs-5">
                            <i class="bi bi-telephone"></i>
                        </span>
                        <span>(031) 8280440</span>
                    </li>
                </ul>
            </div>

        </div> {{-- row --}}

        {{-- garis pemisah --}}
        <hr class="border-secondary my-4">

        {{-- copyright --}}
        <div class="text-center" style="font-size:13px;">
            Balai Hiperkes dan Keselamatan Kerja Kota Surabaya © {{ date('Y') }}, All Rights Reserved
        </div>
    </div> {{-- container --}}
</footer>
