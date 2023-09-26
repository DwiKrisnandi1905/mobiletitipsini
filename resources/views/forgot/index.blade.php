<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('img/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title>{{ $title }}</title>
</head>
<style>
    body {
        font-family: 'Raleway', 'san-serif';
    }

    @media screen and (max-width: 768px) {
        .topbar {
            background-color: #FFF; 
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); 
            padding: 5px 0; 
            color:#000; 
            text-align: center;
            position: relative;
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
            left: 6%; 
            top: 50%; 
            transform: translateY(-50%); 
        }

        .deskripsi h1 {
            text-align: center;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-top: 12px;
        }

        .deskripsi p {
            color: var(--grey-500, #667085);
            text-align: center;
            font-size: 15px;
            font-style: normal;
            line-height: 24px;
            margin-bottom: 30px;
        }

        .btnMasuk {
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
            font-weight: bold;
        }
    }
</style>

<body>
    <div class="topbar">
        <a href="{{ route('login.masuk') }}">
            <img src="{{ asset('img/Expand_left.svg') }}" alt="Gambar Kiri" class="expand-left">
        </a>
        <p>{{ $title }}</p>
    </div>
    <div class="d-flex pt-4 pb-3 justify-content-center">
        <img src="{{ asset('img/Logo2.svg') }}">
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{ asset('img/5.svg') }}">
    </div>
    <div class="col">
        <div class="deskripsi">
            <h1>Lupa Kata Sandi</h1>
            <p>Masukkan email yang Kamu gunakan pada saat<br> mendaftar dan kami akan mengirimkan instruksi<br> reset kata sandi ke email Kamu</p>
        </div>
        <form>
            <div class="container ps-4 pe-4">
                <div class="form-group">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" style="border-right: none; background-color: #e8f0fe;">
                            <i class="bi bi-envelope" style="color: gray;"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email" style="background-color: #e8f0fe; border-left: none;" required>
                    </div>
                </div>
                <button type="submit" class="btnMasuk">Kirim</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>