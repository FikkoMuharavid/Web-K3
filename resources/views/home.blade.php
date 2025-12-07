@extends('layouts.app')

@section('content')
<style>
  body{
    margin: 0;
    /* background-color: #000; */
    color: #eee;
    font-family: Poppins;
    font-size: 12px;
  }


  /* slider section  */

  .slider{
      height: 98vh;
      margin-top: -50px;
      width: 100%;
      overflow: hidden;
      position: relative;
  }
  .slider .list .item{
      width: 100%;
      height: 100%;
      position: absolute;
      inset: 0 0 0 0;
  }
  .slider .list .item img{
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
  .slider .list .item .content{
      position: absolute;
      top: 20%;
      width: 1140px;
      max-width: 80%;
      left: 50%;
      transform: translateX(-50%);
      padding-right: 30%;
      box-sizing: border-box;
      color: #fff;
      text-shadow: 0 5px 10px #0004;
  }

  .slider .list .item .content .title,
  .slider .list .item .content .type{
      font-size: 40px;
      font-weight: bold;
      line-height: 1.3em;
  }
  .slider .list .item .type{
      color: #14ff72cb;
  }
  .slider .list .item .button{
      display: grid;
      grid-template-columns: repeat(2, 130px);
      grid-template-rows: 40px;
      gap: 5px;
      margin-top: 20px;
  }
  .slider .list .item .button button{
      border: none;
      background-color: #eee;
      font-family: Poppins;
      font-weight: 500;
      cursor: pointer;
      transition: 0.4s;
      letter-spacing: 2px;
  }


  .slider .list .item .button button:hover{
      letter-spacing: 3px;
  }
  .slider .list .item .button button:nth-child(2){
      background-color: transparent;
      border: 1px solid #fff;
      color: #eee;
  }

  /* Thumbnail Section  */
  .thumbnail{
      position: absolute;
      bottom: 50px;
      left: 50%;
      width: max-content;
      z-index: 100;
      display: flex;
      gap: 20px;
  }

  .thumbnail .item{
      width: 150px;
      height: 220px;
      flex-shrink: 0;
      position: relative;
  }

  .thumbnail .item img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
  }


  /* nextPrevArrows Section  */
  .nextPrevArrows{
      position: absolute;
      top: 80%;
      right: 52%;
      z-index: 100;
      width: 300px;
      max-width: 30%;
      display: flex;
      gap: 10px;
      align-items: center;
  }
  .nextPrevArrows button{
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #14ff72cb;
      border: none;
      color: #fff;
      font-family: monospace;
      font-weight: bold;
      transition: .5s;
      cursor: pointer;
  }
  .nextPrevArrows button:hover{
      background-color: #fff;
      color: #000;
  }

  /* Animation Part */
  .slider .list .item:nth-child(1){
      z-index: 1;
  }


  /* animation text in first item */
  .slider .list .item:nth-child(1) .content .title,
  .slider .list .item:nth-child(1) .content .type,
  .slider .list .item:nth-child(1) .content .description,
  .slider .list .item:nth-child(1) .content .buttons
  {
      transform: translateY(50px);
      filter: blur(20px);
      opacity: 0;
      animation: showContent .5s 1s linear 1 forwards;
  }
  @keyframes showContent{
      to{
          transform: translateY(0px);
          filter: blur(0px);
          opacity: 1;
      }
  }
  .slider .list .item:nth-child(1) .content .title{
      animation-delay: 0.4s !important;
  }
  .slider .list .item:nth-child(1) .content .type{
      animation-delay: 0.6s !important;
  }
  .slider .list .item:nth-child(1) .content .description{
      animation-delay: 0.8s !important;
  }
  .slider .list .item:nth-child(1) .content .buttons{
      animation-delay: 1s !important;
  }


  /* Animation for next button click */
  .slider.next .list .item:nth-child(1) img{
      width: 150px;
      height: 220px;
      position: absolute;
      bottom: 50px;
      left: 50%;
      border-radius: 30px;
      animation: showImage .5s linear 1 forwards;
  }

  @keyframes showImage{
      to{
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border-radius: 0;
      }
  }

  .slider.next .thumbnail .item:nth-last-child(1){
      overflow: hidden;
      animation: showThumbnail .5s linear 1 forwards;
  }
  .slider.prev .list .item img{
      z-index: 100;
  }


  @keyframes showThumbnail{
      from{
          width: 0;
          opacity: 0;
      }
  }


  .slider.next .thumbnail{
      animation: effectNext .5s linear 1 forwards;
  }

  @keyframes effectNext{
      from{
          transform: translateX(150px);
      }
  }



  /* Animation for prev button click */
  .slider.prev .list .item:nth-child(2){
      z-index: 2;
  }

  .slider.prev .list .item:nth-child(2) img{
      animation: outFrame 0.5s linear 1 forwards;
      position: absolute;
      bottom: 0;
      left: 0;
  }
  @keyframes outFrame{
      to{
          width: 150px;
          height: 220px;
          bottom: 50px;
          left: 50%;
          border-radius: 20px;
      }
  }

  .slider.prev .thumbnail .item:nth-child(1){
      overflow: hidden;
      opacity: 0;
      animation: showThumbnail .5s linear 1 forwards;
  }
  .slider.next .nextPrevArrows button,
  .slider.prev .nextPrevArrows button{
      pointer-events: none;
  }


  .slider.prev .list .item:nth-child(2) .content .title,
  .slider.prev .list .item:nth-child(2) .content .type,
  .slider.prev .list .item:nth-child(2) .content .description,
  .slider.prev .list .item:nth-child(2) .content .buttons
  {
      animation: contentOut 1.5s linear 1 forwards!important;
  }

  @keyframes contentOut{
      to{
          transform: translateY(-150px);
          filter: blur(20px);
          opacity: 0;
      }
  }
  @media screen and (max-width: 678px) {
      .slider .list .item .content{
          padding-right: 0;
      }
      .slider .list .item .content .title{
          font-size: 30px;
      }
  }
</style>

<div class="slider">
    <div class="list">

        <div class="item">
            <img src="https://i.ytimg.com/vi/12kuG2FjA4I/maxresdefault.jpg" alt="">

            <div class="content">
                <div class="title">Selamat Datang</div>
                <div class="type">di Balai K3 Surabaya</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="button">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="https://www.its.ac.id/tgeofisika/wp-content/uploads/sites/33/2025/05/Uji-Sertifikasi-1024x568.jpeg" alt="">

            <div class="content">
                <<div class="title">Selamat Datang</div>
                <div class="type">di Balai K3 Surabaya</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="button">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="https://i.ytimg.com/vi/12kuG2FjA4I/maxresdefault.jpg" alt="">

            <div class="content">
                <div class="title">Selamat Datang</div>
                <div class="type">di Balai K3 Surabaya</div>>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="button">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>

    </div>


    <div class="thumbnail">

        <div class="item">
            <img src="https://i.ytimg.com/vi/12kuG2FjA4I/maxresdefault.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://www.its.ac.id/tgeofisika/wp-content/uploads/sites/33/2025/05/Uji-Sertifikasi-1024x568.jpeg" alt="">
        </div>
        <div class="item">
            <img src="https://i.ytimg.com/vi/12kuG2FjA4I/maxresdefault.jpg" alt="">
        </div>

    </div>


    <div class="nextPrevArrows">
        <button class="prev"> < </button>
        <button class="next"> > </button>
    </div>
</div>


<script>
  let nextBtn = document.querySelector('.next')
  let prevBtn = document.querySelector('.prev')

  let slider = document.querySelector('.slider')
  let sliderList = slider.querySelector('.slider .list')
  let thumbnail = document.querySelector('.slider .thumbnail')
  let thumbnailItems = thumbnail.querySelectorAll('.item')

  thumbnail.appendChild(thumbnailItems[0])

  // Function for next button 
  nextBtn.onclick = function() {
      moveSlider('next')
  }


  // Function for prev button 
  prevBtn.onclick = function() {
      moveSlider('prev')
  }


  function moveSlider(direction) {
      let sliderItems = sliderList.querySelectorAll('.item')
      let thumbnailItems = document.querySelectorAll('.thumbnail .item')
      
      if(direction === 'next'){
          sliderList.appendChild(sliderItems[0])
          thumbnail.appendChild(thumbnailItems[0])
          slider.classList.add('next')
      } else {
          sliderList.prepend(sliderItems[sliderItems.length - 1])
          thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
          slider.classList.add('prev')
      }


      slider.addEventListener('animationend', function() {
          if(direction === 'next'){
              slider.classList.remove('next')
          } else {
              slider.classList.remove('prev')
          }
      }, {once: true}) // Remove the event listener after it's triggered once
  }
</script>
<!-- resources/views/services.blade.php -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7fb;
            font-family: 'Poppins', sans-serif;
        }
        .section-title {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            margin-top: 40px;
            color: #15406A;
            
        }

        .title-section h2 {
            font-weight: 700;
            color: #15406A;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #15406A;
            border-radius: 5px;
            margin: 8px auto 20px auto;
        }
        .description-box {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            font-size: 13px;
            line-height: 1.5;
        }
        .service-card {
            width: 100%;
            max-width: 300px;
            background: white;
            border-radius: 10px;
            padding: 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
            border: 3px solid #15406A;
        }
        .service-header {
            background: #15406A;
            color: white;
            text-align: center;
            padding: 8px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 7px 7px 0 0;
        }
        .service-body {
            height: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cta-box {
            max-width: 700px;
            margin: 40px auto;
            background: #15406A;
            color: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .cta-button {
            background: white;
            border-radius: 30px;
            padding: 10px 25px;
            border: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            text-decoration: none;
            color: #15406A;
        }
        .cta-button:hover {
            background: #e6e6e6;
        }
            .service-card:hover {
            transform: translateY(-6px);
            transition: 0.3s ease-in-out;
            box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        }
        .service-card { transition: 0.3s ease-in-out; margin-bottom: 25px; }
    </style>
</head>
<body>

    <h2 class="section-title">Layanan Kami</h2>
    <div class="title-underline"></div>

    <div class="description-box text-center">
        Balai Higiene Perusahaan Kesehatan dan Keselamatan Kerja Surabaya menyediakan berbagai layanan
        pengujian untuk memastikan lingkungan kerja yang aman dan sehat sesuai dengan standar K3.
        Terakreditasi KAN | Standar ISO/IEC 17025
    </div>

    <div class="container mt-4">
    <style>
        .slider-wrapper {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-bottom: 10px;
        }
        .slider-wrapper::-webkit-scrollbar {
            height: 8px;
        }
        .slider-wrapper::-webkit-scrollbar-thumb {
            background: #15406A;
            border-radius: 10px;
        }
    </style>

    <div class="slider-wrapper">
        <div class="service-card">
            <div class="service-header">Pelatihan</div>
            <div class="service-body">
                <img src="/images/Logo2.png" width="120">
            </div>
        </div>

        <div class="service-card">
            <div class="service-header">Pengujian</div>
            <div class="service-body">
                <img src="/images/Logo2.png" width="120">
            </div>
        </div>

        <div class="service-card">
            <div class="service-header">Pemeriksaan Kesehatan</div>
            <div class="service-body">
                <img src="/images/Logo2.png" width="120">
            </div>
        </div>

        <div class="service-card">
            <div class="service-header">Pemeriksaan Kesehatan</div>
            <div class="service-body">
                <img src="/images/Logo2.png" width="120">
            </div>
        </div>

        <div class="service-card">
            <div class="service-header">Pemeriksaan Ergonomy</div>
            <div class="service-body">
                <img src="/images/Logo2.png" width="120">
            </div>
        </div>
    </div>
</div>

<div class="cta-box">
        <h5 class="fw-bold">Siap Melayani Kebutuhan K3 Anda</h5>
        <p class="mt-2" style="font-size: 13px;">Percayakan kebutuhan pengujian dan pemeriksaan K3 Anda kepada kami.<br>
        Tim profesional kami siap memberikan layanan terbaik dengan standar ISO/IEC 17025.</p>

        <a href="daftar_pelayanan" class="cta-button">Jelajahi Layanan Kami ➜</a>
    </div>

<style>
        body {
            background-color: #f4f7fb;
            font-family: 'Poppins', sans-serif;
        }

        .title-section h2 {
            font-weight: 700;
            color: #15406A;
            font-size: 28px;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #15406A;
            border-radius: 5px;
            margin: 8px auto 20px auto;
        }

        .card-custom {
            background: #ffffff;
            border-radius: 14px;
            border: 2px solid #d3d8e2;
            padding: 30px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.05);
        }

        .image-box {
            background: #e6e6ef;
            border-radius: 12px;
            height: 260px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-primary-custom {
            background: #15406A;
            color: white;
            border-radius: 30px;
            padding: 10px 22px;
            border: none;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: #0f2847;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <!-- TITLE -->
        <div class="text-center title-section mb-4">
            <h2>Tentang Kami</h2>
            <div class="title-underline"></div>
        </div>

        <!-- CARD SECTION -->
        <div class="card-custom mx-auto" style="max-width: 900px;">

            <div class="row align-items-center">

                <!-- IMAGE -->
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="images/Logo2.png" class="img-fluid">
                    </div>
                </div>

                <!-- TEXT -->
                <div class="col-md-8">
                    <h6 class="fw-bold text-primary mb-2">Tentang Balai K3 Surabaya</h6>

                    <p style="font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p style="font-size: 14px;">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>

            </div>

        </div>

    </div>

    <div class="text-center title-section mb-4">
            <h2>Kontak</h2>
            <div class="title-underline"></div>
        </div>

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
                            <button type="submit" class="btn btn-primary px-5">
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

    /* Jika ingin border biru di textarea seperti screenshot */
    textarea.form-control.border-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25); /* default bootstrap blue focus */
    }
</style>
</body>


</html>



@endsection
