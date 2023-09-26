<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('img/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title>{{ $title }}</title>
    <style>
        .container-daftar {
            margin: -10px auto;
            max-width: 375px;
            width: 110.7%;
            height: 812px;
            min-height: 105vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 104%;
            margin-left: -8px;
            height: 0px;
            min-height: 100vh;
        }

        .image-logo2 {
            margin-top: -100px;
            margin-bottom: 30px;
        }

        .topbar {
            background-color: #FFF; 
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); 
            padding: 5px 0; 
            color:#000; 
            text-align: center;
            position: relative;
            margin-bottom: 100px;
        }
        .topbar p {
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            margin-top: 5px; 
            margin-bottom: 5px;
        }
        .topbar .expand-left {
            position: absolute; 
            left: 10px; 
            top: 50%; 
            transform: translateY(-50%); 
        }
        .form-group {
            padding: 5px;
        }
        /* Style for labels */
        .form-group label {
            font-family: Raleway;
            margin-bottom: 8px;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
        }

        /* Style for input fields */
        .form-control {
            display: flex;
            width: 340px;
            height: 40px;
            padding: 0px 16px;
            align-items: center;
            gap: 8px;
            align-self: stretch;
            border-radius: 8px;
            background: var(--grey-gray, #F0F4FD);
        }

        /* Style for the "Daftar" button */
        .btn-primary {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
            background: var(--primary-500, #068113);
            margin-top: 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .button-text {
            text-align: center;
            margin-top: 10px;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 0.084px;
        }
        .button-text a {
            text-decoration: none;
            color: #068113;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px;
            letter-spacing: 0.084px;
        }

        .form-control::placeholder {
            color: var(--grey-500, #667085);
            font-family: Raleway;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
        }

        @media screen and (max-width: 768px) {
            .container-daftar {
                max-width: 100%;
                margin-left: 0px;
                height: 0px;
                min-height: 75vh;
                margin-top: 8px;
            }

            .image-logo2 {
                margin-top: -100px;
            }
        }

    </style>
</head>

<body>
    <div class="topbar">
        <a href="{{ route('landingpage.onboarding') }}">
            <img src="{{ asset('img/Expand_left.svg') }}" alt="Gambar Kiri" class="expand-left">
        </a>
        <p>Daftar</p>
    </div>
    <div class="container-daftar">
        <img class="image-logo2" src="{{ asset('img/Logo2.svg') }}" alt="Gambarimage" id="logoImage">
        <form>
            <div class="form-group">
                <label for="nama">Email</label>
                <input type="email" id="Email" name="nama" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="email">Kata Sandi</label>
                <input type="password" id="Kata Sandi" name="email" class="form-control" placeholder="Min 8 Karakter">
            </div>
            <div class="form-group">
                <label for="password">Konfirmasi Kata Sandi</label>
                <input type="password" id="Konfirmasi" name="password" class="form-control" placeholder="Min 8 Karakter">
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telefon</label>
                <input type="tel" id="telepon" name="telepon" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <p class="button-text">Sudah punya akun? <a href="{{ route('login.masuk') }}">Masuk disini</a></p>
        </form>
    </div>
</body>
</html>
