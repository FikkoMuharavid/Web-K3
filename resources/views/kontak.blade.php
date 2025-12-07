@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row gx-4 gy-4">

        {{-- Kolom kiri: feedback & saran --}}
        <div class="col-12 col-lg-8">

            {{-- Card atas: judul & deskripsi --}}
            <div class="card shadow-sm rounded-3 mb-4 border-0">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-2">Feedback & Saran</h5>
                    <p class="card-text text-muted mb-0">
                        Kami sangat menghargai masukan Anda. Pendapat Anda membantu kami untuk terus berkembang
                        dan memberikan layanan yang lebih baik.
                    </p>
                </div>
            </div>

            {{-- Card bawah: form rating + pesan --}}
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">

                    {{-- Pertanyaan --}}
                    <h5 class="card-title text-center fw-semibold mb-3">Bagaimana pengalaman Anda dengan layanan kami?</h5>

                    {{-- Bintang rating (static, mirip screenshot) --}}
                    <div class="d-flex justify-content-center mb-3">
                        {{-- 5 bintang kuning --}}
                        <i class="bi bi-star-fill text-warning fs-3 mx-1"></i>
                        <i class="bi bi-star-fill text-warning fs-3 mx-1"></i>
                        <i class="bi bi-star-fill text-warning fs-3 mx-1"></i>
                        <i class="bi bi-star-fill text-warning fs-3 mx-1"></i>
                        <i class="bi bi-star-fill text-warning fs-3 mx-1"></i>
                    </div>

                    <p class="text-center text-muted mb-4">Sangat Puas</p>

                    {{-- Form --}}
                    

                        {{-- Pesan --}}
                        <div class="mb-4">
                            <label for="message" class="form-label visually-hidden">Pesan Anda</label>
                            <textarea id="message"
                                      name="message"
                                      class="form-control border-primary"
                                      rows="4"
                                      placeholder="Sampaikan, saran, keluhan, atau pujian anda di sini ......"
                                      required></textarea>
                        </div>

                        {{-- Tombol Kirim --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-light px-5">
                                Kirim
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- Kolom kanan: info kontak + peta --}}
        <div class="col-12 col-lg-4 d-flex flex-column gap-4">

            {{-- Card info kontak --}}
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3">Informasi Kontak</h6>

                    <ul class="list-unstyled mb-0" style="line-height:1.6; font-size:14px;">
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-telephone-fill fs-5"></i>
                            <span>(031) 8280440</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-envelope-fill fs-5"></i>
                            <span>balai.k3surabaya@gmail.com</span>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-instagram fs-5"></i>
                            <span>@balaihiperkessby</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Card peta --}}
            <div class="card shadow-sm rounded-3 border-0 overflow-hidden">
                {{-- Sesuaikan ukuran iframe agar proporsional --}}
                <div class="ratio ratio-4x3">
                    {{-- Ganti src dengan embed map yang sesuai --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.085605091287!2d112.76643297429658!3d-7.315246094771781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb1d9bd9f2d1%3A0x4dd0bbc51362cf5c!2sUPT%20K2%20Surabaya!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Optional: CSS tambahan untuk meniru style card di screenshot --}}
<style>
    /* Menonjolkan card dengan radius lebih halus */
    .card {
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
    }

    /* Ubah warna seluruh font */
    body, .card, .card * {
        color: #15406A !important;
    }

    /* Jika ingin border biru di textarea seperti screenshot */
    textarea.form-control.border-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
</style>


@endsection
