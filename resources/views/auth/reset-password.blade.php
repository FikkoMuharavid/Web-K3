<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>

    <div class="container">

        <!-- LEFT -->
        <div class="left">
            <img src="/images/Logo.png" alt="Logo">
            <h2>Direktorat Jenderal Pembinaan<br>
                Pengawasan Ketenagakerjaan dan K3</h2>
            <h1>Balai K3 Surabaya</h1>
        </div>

        <!-- RIGHT -->
        <div class="right">

            <div class="title">Reset Kata Sandi</div>
            <div class="subtitle">Masukkan kata sandi baru anda</div>

            {{-- ERROR MESSAGE --}}
            @if($errors->any())
                <div class="alert error">
                    {{ $errors->first() }}
                </div>
            @endif



            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>

                <label>Kata Sandi Baru</label>
                <input type="password" name="password" placeholder="Masukkan kata sandi baru" required>

                <label>Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi kata sandi" required>

                <button type="submit" class="btn">Simpan Perubahan</button>
            </form>

        </div>

    </div>

</body>
</html>
