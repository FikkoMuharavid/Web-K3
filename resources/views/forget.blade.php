<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi</title>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* LEFT SECTION */
        .left {
            width: 50%;
            background: #0D4065;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .left img {
            width: 230px;
            margin-bottom: 30px;
        }

        .left h2 {
            margin-top: 10px;
            font-weight: 300;
            font-size: 20px;
            line-height: 1.5;
        }

        .left h1 {
            font-size: 32px;
            font-weight: 600;
            margin-top: 10px;
        }

        /* RIGHT SECTION */
        .right {
            width: 50%;
            background: #ffffff;
            padding: 40px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .title {
            font-size: 30px;
            color: #0D4065;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: left;
        }

        .subtitle {
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
        }

        label {
            font-size: 13px;
            font-weight: 600;
            color: #0D4065;
        }

        input {
            width: 100%;
            padding: 10px 15px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 2px solid #AFC3D1;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #0D4065;
        }

        .btn {
            width: 100%;
            background: #0D4065;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 10px;
            font-weight: 600;
            font-size: 15px;
        }

        .btn:hover {
            opacity: .9;
        }
    </style>

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

            <div class="title">Lupa Kata Sandi</div>
            <div class="subtitle">Masukkan email anda untuk mengubah kata sandi</div>

            <form method="">
               

                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>

                <button type="submit" class="btn">Reset Password</button>
            </form>
        </div>

    </div>

</body>

</html>
