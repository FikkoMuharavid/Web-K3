@extends('layouts.app')

@section('content')

{{-- resources/views/components/daftar-pelayanan.blade.php --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
{{-- Bootstrap Icons --}}
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
{{-- Font Awesome (opsional, untuk ikon vest yang lebih sesuai) --}}
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- di bagian bawah layout atau sebelum </body>, pastikan JS Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container my-5 position-relative">

    {{-- Tombol keranjang di pojok kanan atas --}}
    <a href="#"
       class="btn btn-primary shadow rounded-circle position-absolute d-flex align-items-center justify-content-center"
       style="top:0; right:0; width:60px; height:60px; z-index:10;">
        <i class="bi bi-cart3 fs-4"></i>
    </a>

    {{-- Judul halaman dengan panah kembali --}}
    <h4 class="mb-4 fw-semibold">
        <i class="bi bi-arrow-left me-2"></i>Daftar Pelayanan
    </h4>

    {{-- Kartu info tarif sesuai screenshot --}}
    <div class="card mb-4 border-0 shadow-sm" style="border-radius:12px;">
        <div class="card-body text-center py-2 px-3">
            <small class="text-muted" style="font-size:13px;">
                Tarif sesuai PMK 02 Tahun 2023 Tentang Jenis dan Tarif PNPB Yang Berlaku Pada Kementerian Ketenagakerjaan
            </small>
        </div>
    </div>

    {{-- Accordion --}}
    <div class="accordion" id="accordionPelayanan">

        {{-- Panel 1: Lingkungan Kerja --}}
        <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
            <h2 class="accordion-header" id="headingLingkungan">
                <button class="accordion-button"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseLingkungan"
                        aria-expanded="true"
                        aria-controls="collapseLingkungan">
                    {{-- Ikon: coba pakai Font Awesome vest; jika mau pakai BI, ganti --}}
                    <span class="me-2 fs-4">
                        {{-- Font Awesome vest (lebih representatif) --}}
                        <i class="fa-solid fa-vest"></i>
                        {{-- Jika tidak pakai FA, bisa gunakan ikon BI lain misal bi-person-vcard --}}
                        {{-- <i class="bi bi-person-vcard"></i> --}}
                    </span>
                    <span class="fw-semibold">Lingkungan Kerja</span>
                </button>
            </h2>
            <div id="collapseLingkungan"
                 class="accordion-collapse collapse show"
                 aria-labelledby="headingLingkungan"
                 data-bs-parent="#accordionPelayanan">
                <div class="accordion-body p-0">

                    {{-- Deskripsi panel --}}
                    <div class="px-4 py-3 text-muted" style="font-size:14px; line-height:1.5;">
                        Layanan pengukuran dan evaluasi kondisi lingkungan kerja untuk memastikan keselamatan,
                        kenyamanan, dan kepatuhan terhadap standar K3.
                    </div>

                    {{-- Daftar item --}}
                    <ul class="list-group list-group-flush">
                        {{-- Item 1 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">Gas Analisis Spektrofotometri (SO2, NO2, OX, H2S, NH3)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 2 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">Kadar Debu Total (LVS)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 3 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">Kadar Debu Logam (AAS)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        {{-- Panel 2: Ambien --}}
        <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
            <h2 class="accordion-header" id="headingAmbien">
                <button class="accordion-button"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseAmbien"
                        aria-expanded="true"
                        aria-controls="collapseAmbien">
                    <span class="me-2 fs-4">
                        {{-- Ikon Ambien; contoh BI clouds --}}
                        <i class="bi bi-clouds"></i>
                    </span>
                    <span class="fw-semibold">Ambien</span>
                </button>
            </h2>
            <div id="collapseAmbien"
                 class="accordion-collapse collapse show"
                 aria-labelledby="headingAmbien"
                 data-bs-parent="#accordionPelayanan">
                <div class="accordion-body p-0">

                    {{-- Deskripsi panel --}}
                    <div class="px-4 py-3 text-muted" style="font-size:14px; line-height:1.5;">
                        Pengukuran kualitas udara ambien di lingkungan sekitar perusahaan untuk memastikan area tetap aman
                        dan tidak berdampak negatif.
                    </div>

                    {{-- Daftar item --}}
                    <ul class="list-group list-group-flush">
                        {{-- Item 1 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">Gas Analisis Spektrofotometri (SO2, NO2, OX, H2S, NH3)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 2 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">Kadar Debu Total (LVS)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 3 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">Kadar Debu Logam (AAS)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>

{{-- CSS tambahan untuk menyesuaikan presisi --}}
<style>
    /* Radius panel */
    .accordion-item {
        border-radius: 12px;
    }

    /* Supaya accordion-button tidak memotong radius sebelum, atur radius di header */
    .accordion-button {
        border-radius: 12px;
    }

    /* Jarak antar panel */
    .accordion-item + .accordion-item {
        margin-top: 0.75rem;
    }
</style>

@endsection
