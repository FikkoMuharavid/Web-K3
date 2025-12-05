<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Pelayanan K3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow: hidden;
            font-family: 'Poppins', ;
        }

        .left-side {
            background-color: #143D66;
            color: white;
            height: 100vh;
        }

        .login-title {
            color: #143D66;
            font-weight: 700;
        }

        .input-custom {
            border-radius: 20px;
            height: 45px;
            font-size: 14px;
        }

        .btn-login {
            background-color: #143D66;
            border-radius: 25px;
            height: 45px;
            color: white;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn-login:hover {
            background-color: #0f2f4d;
            color: white;
        }

        .logo-big {
            width: 220px;
        }

        .form-container {
            width: 70%;
        }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row g-0">

        {{-- LEFT SIDE --}}
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center left-side text-center px-5">
            <img src="/images/Logo.png" class="logo-big mb-4">

            <h5 class="fw-normal mb-1">Direktorat Jenderal Pembinaan</h5>
            <h5 class="fw-normal mb-1">Pengawasan Ketenagakerjaan dan K3</h5>
            <h3 class="fw-bold mt-2">Balai K3 Surabaya</h3>
        </div>

        {{-- RIGHT SIDE --}}
        <div class="col-md-6 d-flex justify-content-center align-items-center">

            <div class="form-container">

                <h2 class="text-center login-title mb-4">Masuk</h2>

                <form action="{{ url('login') }}" method="POST">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                    {{-- Email --}}
                    <label class="mb-1 fw-semibold">Email</label>
                    <input type="email" name="email" placeholder="Masukkan email"
                           class="form-control input-custom mb-3" required>

                    {{-- Password --}}
                    <label class="mb-1 fw-semibold">Password</label>
                    <div class="input-group mb-2">
                        <input type="password" name="password" id="passwordInput"
                               placeholder="Masukkan password"
                               class="form-control input-custom" required>
                        <span class="input-group-text bg-white border-0"
                              style="margin-left:-45px; z-index:10; cursor:pointer;"
                              onclick="togglePassword()">
                            <i class="bi bi-eye" id="toggleIcon"></i>
                        </span>
                    </div>

                    {{-- Register + Forgot --}}
                    <div class="d-flex justify-content-between mt-1 mb-4" style="font-size: 13px;">
                        <div>
                            Belum punya akun?
                           <a href="/register" class="fw-bold text-decoration-none"
                               style="color:#143D66;">Daftar</a>
                        </div>
                        <a href="/forgot-password" class="fw-bold text-decoration-none"
                           style="color:#143D66;">Lupa Password?</a>
                    </div>

                    <div class="mb-3">
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {!! NoCaptcha::renderJs() !!}


                    {{-- Button --}}
                    <button type="submit" class="btn btn-login w-100">Masuk</button>
                    

                </form>
            </div>

        </div>

    </div>
</div>

<script>
    function togglePassword() {
        const input = document.getElementById('passwordInput');
        const icon = document.getElementById('toggleIcon');

        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }
</script>

</body>
</html>
