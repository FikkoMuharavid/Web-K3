@extends('layouts.app')

@section('content')

<style>
    body {
        background: #ffffff !important;
       font-family: 'Poppins', sans-serif;
    }

    .cart-wrapper {
        width: 100%;
        padding: 20px 0;
    }

    /* Header */
    .cart-header {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 20px 30px;
        font-weight: 600;
        color: #123A63;
        font-size: 20px;
    }

    .cart-header a {
        text-decoration: none;
        color: #123A63;
        font-size: 24px;
    }

    /* Empty State */
    .empty-cart {
        margin-top: 60px;
        text-align: center;
        color: #123A63;
    }

    .empty-cart img {
        width: 90px;
        opacity: .85;
    }

    .empty-cart h3 {
        margin-top: 20px;
        font-size: 18px;
        font-weight: 600;
    }

    .empty-cart p {
        font-size: 14px;
        color: #6c757d;
    }

    /* Cart Item */
    .cart-item {
        background: #F8FBFF;
        border: 1px solid #DCE6F2;
        border-radius: 10px;
        padding: 18px 20px;
        margin-bottom: 15px;
    }

    .item-title {
        font-size: 16px;
        font-weight: 700;
        color: #123A63;
    }

    .item-desc {
        font-size: 13px;
        color: #6c757d;
        margin: 4px 0;
    }

    .item-price {
        font-size: 15px;
        color: #123A63;
        font-weight: bold;
    }

    .remove-btn {
        border: none;
        background: transparent;
        color: #d9534f;
        font-size: 13px;
        cursor: pointer;
    }

    /* Footer Total */
    .cart-footer {
        background: #123A63;
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .btn-checkout {
        background: white;
        color: #123A63;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: none;
        margin-top: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    /* RESPONSIVE */
    @media (max-width: 576px) {
        .cart-header {
            padding: 20px;
            font-size: 17px;
        }
        .item-title { font-size: 14px; }
        .btn-checkout { font-size: 14px; }
    }
</style>

<div class="cart-wrapper">

    <div class="cart-header">
        <a href="/daftar_pelayanan"><i class="bi bi-arrow-left"></i></a>
        <span>Keranjang Pelayanan</span>
    </div>

    {{-- ========== BAGIAN KOSONG (HILANGKAN JIKA ADA ITEM) ========== --}}
    <div class="empty-cart">
        <img src="https://cdn-icons-png.flaticon.com/512/102/102661.png">
        <h3>Keranjang Kosong</h3>
        <p>Anda belum menambahkan layanan apa pun</p>
    </div>
    {{-- ============================================================= --}}


</div>

@endsection
