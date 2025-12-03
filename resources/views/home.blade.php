@extends('layouts.app')

@section('content')

<div id="carouselExampleDark" 
     class="carousel carousel-dark slide"
     data-bs-ride="carousel"
     style=" width: 100%;">

  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="8000">
      <img src="IMAGE1" class="d-block w-100 carousel-img" alt="">
      <div class="carousel-caption d-none d-md-block caption-bg">
        <h5>Pelatihan K3</h5>
        <p>Peningkatan kompetensi tenaga kerja di bidang keselamatan kerja.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="8000">
      <img src="IMAGE2" class="d-block w-100 carousel-img" alt="">
      <div class="carousel-caption d-none d-md-block caption-bg">
        <h5>Sertifikasi K3</h5>
        <p>Penilaian kompetensi dan sertifikasi tenaga ahli K3.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="8000">
      <img src="IMAGE3" class="d-block w-100 carousel-img" alt="">
      <div class="carousel-caption d-none d-md-block caption-bg">
        <h5>Konsultasi K3</h5>
        <p>Pendampingan penerapan SMK3 di perusahaan.</p>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

<style>
/* Gambar memenuhi layar */
.carousel-img {
    width: 100%;
    height: 75vh;
    object-fit: cover;
}

/* Background caption */
.caption-bg {
    background: rgba(0, 0, 0, 0.55);
    padding: 1rem 1.5rem;
    border-radius: 8px;
}

/* Responsive */
@media (max-width: 768px) {
    .carousel-img {
        height: 55vh;
    }
}

@media (min-width: 1600px) {
    .carousel-img {
        height: 80vh;
    }
}
</style>

@endsection
