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
</style>

<div class="visi-container">
    <div class="visi-wrapper">

        {{-- Tombol Kembali --}}
        <a href="{{ url()->previous() }}" class="back-btn">
            <i class="bi bi-arrow-left"></i> Alur Pelayanan
        </a>

        {{-- Gambar full tampilan visi misi --}}
        <img src="{{ asset('images/alurpelayanan.jpg') }}" alt="Alur Pelayanan Balai K3" class="visi-img">

    </div>
</div>

@endsection