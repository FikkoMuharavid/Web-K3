<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            overflow: hidden;
        }
        .left-section {
            background-color: #143D66;
            color: #ffffff;
            height: 100vh;
        }
        .left-section img {
            width: 230px;
        }
        .title-text {
            font-size: 28px;
            font-weight: 600;
        }
        .subtitle-text {
            font-size: 16px;
        }
        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #143D66;
        }
        .form-control {
            border-radius: 8px;
            font-size: 14px;
        }
        .btn-submit {
            background-color: #143D66;
            color: white;
            width: 100%;
            border-radius: 50px;
            padding: 10px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 15px;
        }
        .btn-submit:hover {
            background-color: #0f2f4f;
        }
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- BAGIAN KIRI -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center left-section">
            <img src="/images/Logo.png" alt="Logo">

            <div class="text-center mt-4">
                <div class="subtitle-text">Direktorat Jenderal Pembinaan</div>
                <div class="subtitle-text">Pengawasan Ketenagakerjaan dan K3</div>
                <div class="title-text mt-2">Balai K3 Surabaya</div>
            </div>
        </div>

        <!-- BAGIAN KANAN (FORM REGISTER) -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div style="width: 65%; min-width: 360px;">

                <h2 class="fw-bold text-center mb-4" style="color:#143D66;">Daftar</h2>

                <form action="">
                    

                    <!-- Username -->
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 position-relative">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                        <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor:pointer;"
                              onclick="togglePassword('password', this)">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-2 position-relative">
                        <label class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Konfirmasi Kata Sandi" required>
                        <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor:pointer;"
                              onclick="togglePassword('password_confirmation', this)">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mt-1 mb-3" style="font-size:13px;">
                         <span>Sudah punya akun? <a href="/login" style="color:#143D66; font-weight:600;">Masuk</a></span>
                    </div>

                    <button type="submit" class="btn-submit">Daftar</button>

                </form>

            </div>
        </div>

    </div>
</div>


<script>
    function togglePassword(fieldId, iconElement) {
        let field = document.getElementById(fieldId);
        let icon = iconElement.querySelector("i");

        if (field.type === "password") {
            field.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            field.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }
</script>

</body>
</html>
