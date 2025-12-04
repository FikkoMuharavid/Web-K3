@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .visi-container {
        width: 100%;
        min-height: 100vh;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    .visi-wrapper {
        width: 100%;
        max-width: 1000px;
    }

    /* Styling gambar agar rapi */
    .visi-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    /* Back button */
    .back-btn {
        font-size: 18px;
        color: #143D66;
        text-decoration: none;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
    }

    .back-btn i {
        font-size: 22px;
    }

     .section-title {
        font-size: 36px;
        font-weight: 700;
        color: #143D66;
        text-align: center;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }

    facility-card {
        background-color: #143D66;
        color: white;
        padding: 16px 22px;
        border-radius: 20px;
        font-size: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 15px;
    }

    .content-box {
        background: white;
        padding: 25px 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
        margin-bottom: 30px;
    }

    .content-box ul li {
        margin-bottom: 6px;
        font-size: 15px;
    }

    .facility-image {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.15);
    }
</style>

<div class="visi-container">
    <div class="visi-wrapper">

        {{-- Tombol Kembali --}}
        <a href="/" class="back-btn">
            <i class="bi bi-arrow-left"></i> Sarana Prasarana
        </a>

         <div class="row">
        <!-- LEFT COLUMN -->
        <div class="col-lg-8">

            <!-- Gedung & Fasilitas -->
            <div class="content-box">
                <div class="facility-card">Gedung & Fasilitas</div>
                <ul>
                    <li>Gedung didirikan mulai Tahun 1985 dan 2015 dengan Luas Bangunan Kantor 2.400 M2, yang Terdiri dari : Ruang Pertemuan, Ruang Laboratorium, Ruang Pegawai, Ruang Perpustakaan dan Ruang Komputer.</li>
                    <li>Instalasi Pengolahan Air Limbah.</li>
                </ul>
            </div>

            <!-- Perlengkapan Kerja -->
            <div class="content-box">
                <div class="facility-card">Perlengkapan Kerja</div>
                <ul>
                    <li>4 Unit Mobil Operasional</li>
                    <li>Perabotan Kantor</li>
                    <li>Komputer Desktop dan Laptop, Serta Periferal</li>
                    <li>Komputer : Scanner, Printer, Dll</li>
                    <li>LCD dan Overhead Projector, Mesin Fotocopy</li>
                </ul>
            </div>

            <!-- Peralatan Lapangan -->
            <div class="content-box">
                <div class="facility-card">Peralatan Lapangan</div>
                <ul>
                    <li>Sound Level Meter, Luxmeter, Vibrasimeter, UV Meter, Heat</li>
                    <li>Stress Apparatus, Personal Dust Sampler (PDS), High/Low</li>
                    <li>Volume Dust Sampler, Gas Analyzer, Smoke Meter, Peralatan</li>
                    <li>Sampling Emisi Cerobong dan Peralatan Sampling Udara Atmosphere.</li>
                </ul>
            </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-lg-4">
            <img src="/images/sarana.jpg" class="facility-image" alt="Foto Sarana">
        </div>
    </div>


    <!-- SECOND ROW -->
    <div class="row mt-3">
        <div class="col-lg-6">
            <!-- Peralatan Analisa Lab -->
            <div class="content-box">
                <div class="facility-card">Peralatan Analisa Lab</div>
                <ul>
                    <li>Atomic Absorption Spectrofotometer, Gas Chromatography, UV</li>
                    <li>Visible Spectrofotometer dan Spectrofotometer Portable, GCMS, Dll</li>
                </ul>
            </div>

            <!-- Peralatan Kesehatan -->
            <div class="content-box">
                <div class="facility-card">Peralatan Kesehatan, Gizi Kerja, Dll</div>
                <ul>
                    <li>Audiometri, Spirometri, Hematology Analyzer, Urine Analyzer</li>
                    <li>Kimia Klinik, ECG, Reaction Timer, Harvard Step Test, Kalori</li>
                    <li>Metri, Rontgent Paru, Projector Snellen, Dll</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Peralatan Keselamatan Kerja -->
            <div class="content-box">
                <div class="facility-card">Peralatan Keselamatan Kerja</div>
                <ul>
                    <li>Earth Test, Tahanan Isolasi, Dll</li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</div>



@endsection
