@extends('layouts.app')

@section('content')

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .notif-wrapper {
        max-width: 520px;
        margin: 20px auto;
        background: #fff;
        border-radius: 12px;
    }

    .notif-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    .tab-btn {
        flex: 1;
        text-align: center;
        padding: 12px;
        border-radius: 12px;
        font-weight: 500;
        background: #f1f1f1;
        cursor: pointer;
        color: #444;
    }

    .tab-btn.active {
        background: #1453FF;
        color: white;
    }

    .notif-actions {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        margin: 10px 0 15px;
    }

    .mark-read {
        color: #1453FF;
        cursor: pointer;
        font-weight: 500;
    }

    .delete-all {
        color: red;
        cursor: pointer;
        font-weight: 500;
    }

    .notif-list {
        max-height: 400px;
        overflow-y: auto;
        border-top: 1px solid #eaeaea;
    }

    .notif-item {
        display: flex;
        gap: 12px;
        padding: 16px;
        border-bottom: 1px solid #efefef;
        align-items: start;
        position: relative;
    }

    .unread-dot {
        width: 10px;
        height: 10px;
        background: #1453FF;
        border-radius: 50%;
        margin-top: 6px;
    }

    .notif-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .icon-blue { background: #e8f0ff; color: #1453FF; }
    .icon-green { background: #e6fff2; color: #14aa6d; }

    .notif-content {
        flex: 1;
    }

    .notif-title {
        font-weight: 600;
        margin-bottom: 4px;
        font-size: 16px;
    }

    .notif-desc {
        color: #555;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 6px;
    }

    .notif-time {
        font-size: 12px;
        color: #999;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .notif-link {
        color: #1453FF;
        font-size: 13px;
        font-weight: 500;
        float: right;
    }

    .close-btn {
        position: absolute;
        right: 15px;
        top: 15px;
        font-size: 18px;
        color: #aaa;
        cursor: pointer;
    }

</style>

<div class="notif-wrapper">

    <!-- Header -->
    <div class="notif-header">
        <div>Notifikasi</div>
        <div style="cursor:pointer;color:#aaa;">✕</div>
    </div>

    <!-- Tabs -->
   <div class="tabs">
    <a href="/notifikasi" class="tab-btn active text-decoration-none">
        Semua (5)
    </a>
    <a href="/notifikasi_belum_dibaca" class="tab-btn text-decoration-none">
        Belum Dibaca (2)
    </a>
</div>


    <!-- Actions -->
    <div class="notif-actions">
        <div class="mark-read">✓ Tandai Semua Dibaca</div>
        <div class="delete-all">🗑 Hapus Semua</div>
    </div>

    <!-- Notification List -->
    <div class="notif-list">

        <!-- Notification item -->
        <div class="notif-item">
            <div class="unread-dot"></div>

            <div class="notif-icon icon-blue">📄</div>

            <div class="notif-content">
                <div class="notif-title">Pesanan Baru Dibuat</div>
                <div class="notif-desc">
                    Pesanan #INV/2024/0123 telah berhasil dibuat. Silakan lakukan pembayaran untuk...
                </div>
                <div class="notif-time">
                    🕒 5 menit lalu
                    <span class="notif-link">Lihat Pesanan</span>
                </div>
            </div>

            <div class="close-btn">✕</div>
        </div>

        <!-- Notification item -->
        <div class="notif-item">
            <div class="unread-dot"></div>

            <div class="notif-icon icon-green">💳</div>

            <div class="notif-content">
                <div class="notif-title">Pembayaran Dikonfirmasi</div>
                <div class="notif-desc">
                    Pembayaran untuk pesanan #INV/2024/0122 telah diterima dan diproses oleh sistem...
                </div>
                <div class="notif-time">
                    🕒 2 jam lalu
                    <span class="notif-link">Lihat Detail</span>
                </div>
            </div>

            <div class="close-btn">✕</div>
        </div>

    </div>

</div>

@endsection
