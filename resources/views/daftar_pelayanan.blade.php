@extends('layouts.app')

@section('content')

{{-- resources/views/components/daftar-pelayanan.blade.php --}}


{{-- Bootstrap Icons --}}
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container my-5 position-relative">

    {{-- Tombol keranjang di pojok kanan atas --}}
    <a href="/keranjang"
        class="btn btn-primary shadow rounded-circle position-absolute d-flex align-items-center justify-content-center"
        style="top:0; right:0; width:60px; height:60px; z-index:10;">
        <i class="bi bi-cart3 fs-4"></i>
    </a>

    {{-- Tombol Kembali --}}
    <h4 class="mb-4 fw-semibold" style="font-family: 'Poppins', sans-serif;">
        <a href="/" class="text-decoration-none text-dark">
            <i class="bi bi-arrow-left me-2"></i>Daftar Pelayanan
        </a>
    </h4>


    {{-- Kartu info tarif sesuai screenshot --}}
    <div class="card mb-4 border-0 shadow-sm" style="border-radius:12px;">
        <div class="card-body text-center py-2 px-3">
            <small class="text-muted" style="font-size:13px; font-family: 'Poppins', sans-serif;">
                Tarif sesuai PMK 02 Tahun 2023 Tentang Jenis dan Tarif PNPB Yang Berlaku Pada Kementerian Ketenagakerjaan
            </small>
        </div>
    </div>

    {{-- Accordion --}}
    <div class="accordion" id="accordionPanelsStayOpenExample">


        {{-- Panel 1: Lingkungan Kerja --}}
        <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
            <h2 class="accordion-header" id="headingLingkungan">
                <button class="accordion-button collapsed"
                    style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseLingkungan"
                    aria-expanded="false"
                    aria-controls="collapseLingkungan">

                    <span class="me-2 fs-4">
                        <i class="fa-solid fa-vest"></i>
                    </span>

                    <span class="fw-semibold">Lingkungan Kerja</span>
                </button>
            </h2>

            <div id="collapseLingkungan"
                class="accordion-collapse collapse"
                aria-labelledby="headingLingkungan">


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
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">GAS ANALISIS SPEKTROFOTOMETRI (SO2, NO2, OX, H2S, NH3)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>


                        {{-- Item 2 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">GAS ANALISIS CROMATOGRAPHY (HC,BTX,METANOL,ETANOL, DAN TURUNANNYA)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 250.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 3 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">KADAR DEBU TOTAL (LVS)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 4 --}}
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

                        {{-- Item 5 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">DEBU SILICA</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 300.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 6 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6;">
                            <div style="font-size:14px;">DEBU PESEORANGAN</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 450.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 7 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">DEBU PM 10 (24 JAM)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.250.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        {{-- Item 8 --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">DEBU PM 2,5 (24 JAM)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.250.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                    style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">SERAT ASBES</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">KEBISINGAN SESAT</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 350.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">NOISE DOSIMETER</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 750.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">PENCAHAYAAN UMUM – per 100m2</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 200.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">PENCAHAYAAN LOKAL</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 50.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">IKLIM KERJA – ISBB</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 75.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">IKLIM KERJA – ISBB & KECEPATAN ALIRAN UDARA</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">GETARAN LENGAN TANGAN</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">GETARAN SELURUH TUBUH</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">GETARAN MEKANIK</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 125.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">MEDAN MAGNET</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">MEDAN LISTRIK</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">ULTRAVIOLET</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">PEMETAAN KEBISINGAN – Per 400m2</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 4.000.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">PENGUJIAN MIKROBA (KOLONI)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 500.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">PENGUJIAN MIKROBA (PATOGEN)</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.500.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">ERGONOMIC</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 250.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                            <div style="font-size:14px;">SANITASI DAN HIGIENE TEMPAT KERJA</div>
                            <div class="d-flex align-items-center">
                                <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 500.000,-</span>
                                <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        {{-- Panel 2: Ambien --}}
        <div class="accordion" id="accordionPelayanan">

            <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
                <h2 class="accordion-header" id="headingAmbien">
                    <button class="accordion-button collapsed"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseAmbien"
                        aria-expanded="false"
                        aria-controls="collapseAmbien">
                        <span class="me-2 fs-4">
                            <i class="bi bi-clouds"></i>
                        </span>
                        <span class="fw-semibold">Ambien</span>
                    </button>
                </h2>

                <div id="collapseAmbien"
                    class="accordion-collapse collapse"
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
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">GAS ANALISIS SPEKTROFOTOMETRI (SO2, NO2, OX, H2S, NH3)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>


                            {{-- Item 2 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">GAS ANALISIS CHROMATOGRAPHY (HC, BTX, METANOL, ETANOL DAN TURUNANNYA)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 250.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 3 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">KADAR DEBU LOGAM (AAS)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 4 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">DEBU PM 10 (24 JAM)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.250.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 5 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">DEBU PM 2,5 (24 JAM)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.250.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 6 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">MEDAN LISTRIK</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 100.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 7 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">PEMETAAN KEBISINGAN – per 400 m2</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 4.000.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 8 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">TOTAL SUSPENDED PARTICULAT (TPS) 24 JAM</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.250.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            {{-- Item 9 --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">KEBISINGAN 24 JAM (7x ukur)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 350.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            {{-- Panel 3: Emisi --}}
            <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
                <h2 class="accordion-header" id="headingEmisi">
                    <button class="accordion-button collapsed"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseEmisi"
                        aria-expanded="false"
                        aria-controls="collapseEmisi">
                        <span class="me-2 fs-4">
                            <i class="bi bi-building-fill-gear"></i>
                        </span>
                        <span class="fw-semibold">Emisi</span>
                    </button>
                </h2>
                <div id="collapseEmisi"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingEmisi"
                    data-bs-parent="#accordionPelayanan">
                    <div class="accordion-body p-0">

                        <div class="px-4 py-3 text-muted" style="font-size:14px; line-height:1.5;">
                            Pengujian tingkat emisi industri guna memastikan aktivitas operasional memenuhi baku mutu lingkungan.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">DEBU</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">SO₂</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">NO₂</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>


                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">NH₃</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>


                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">H₂S</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">HCL</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">HF</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Hg</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">CL₂</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 150.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Penentuan Komposisi Gas Buang (CO, CO₂, O₂)</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 450.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Laju Alir</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 300.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">HCL</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 250.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Opasitas</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 350.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Logam per Parameter</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 50.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0" style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            {{-- Panel 4: Kesehatan --}}
            <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
                <h2 class="accordion-header" id="headingKesehatan">
                    <button class="accordion-button collapsed"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseKesehatan"
                        aria-expanded="false"
                        aria-controls="collapseKesehatan">
                        <span class="me-2 fs-4">
                            <i class="fa-solid fa-notes-medical"></i>
                        </span>
                        <span class="fw-semibold">Kesehatan</span>
                    </button>
                </h2>
                <div id="collapseKesehatan"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingKesehatan"
                    data-bs-parent="#accordionPelayanan">
                    <div class="accordion-body p-0">

                        <div class="px-4 py-3 text-muted" style="font-size:14px; line-height:1.5;">
                            Pemeriksaan kesehatan kerja untuk memastikan kesehatan tenaga kerja sesuai standar K3.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6;">
                                <div style="font-size:14px;">Pemeriksaan Kesehatan Dasar</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 200.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6;">
                                <div style="font-size:14px;">Audiometri</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 180.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Spirometri</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 250.000,-</span>
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

            {{-- Panel 5: Pelatihan --}}
            <div class="accordion-item mb-4 border-0 shadow-sm" style="border-radius:12px;">
                <h2 class="accordion-header" id="headingPelatihan">
                    <button class="accordion-button collapsed"
                        style="background-color:#143D66; color:#fff; border-radius:12px; font-size:15px;"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsePelatihan"
                        aria-expanded="false"
                        aria-controls="collapsePelatihan">
                        <span class="me-2 fs-4">
                            <i class="bi bi-mortarboard-fill"></i>
                        </span>
                        <span class="fw-semibold">Pelatihan</span>
                    </button>
                </h2>
                <div id="collapsePelatihan"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingPelatihan"
                    data-bs-parent="#accordionPelayanan">
                    <div class="accordion-body p-0">

                        <div class="px-4 py-3 text-muted" style="font-size:14px; line-height:1.5;">
                            Program pelatihan peningkatan kompetensi sesuai standar K3 dan kebutuhan industri.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6;">
                                <div style="font-size:14px;">Pelatihan K3 Dasar</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 500.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6;">
                                <div style="font-size:14px;">Pelatihan Ahli Muda K3</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 1.500.000,-</span>
                                    <button class="btn btn-sm btn-outline-primary rounded-circle p-0"
                                        style="width:32px; height:32px;">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border:none; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6;">
                                <div style="font-size:14px;">Pelatihan P3K</div>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 fw-semibold" style="font-size:14px;">Rp. 750.000,-</span>
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
            font-family: 'Poppins', sans-serif;
        }

        /* Supaya accordion-button tidak memotong radius sebelum, atur radius di header */
        .accordion-button {
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
        }

        /* Jarak antar panel */
        .accordion-item+.accordion-item {
            margin-top: 0.75rem;
        }
    </style>

    @endsection