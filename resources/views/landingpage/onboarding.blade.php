<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('img/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title>onBoarding</title>
</head>
<style>
    .container-onboarding {
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

    .image-logo {
        margin-top: 100px;
    }

    .container-boxes {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 100px;
    }

    .box {
        width: 100px;
        height: 15px;
        background-color: #D4DBEA;
        margin: 0 3px;
        border-radius: 20px;
        cursor: pointer;
    }

    .deskripsi {
        margin-top: 5px;
    }

    .deskripsi h1 {
        text-align: center;
        font-family: Raleway;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-top: 12px;
    }

    .deskripsi p {
        color: var(--grey-500, #667085);
        text-align: center;
        font-family: Raleway;
        font-size: 16px;
        font-style: normal;
        line-height: 24px;
        margin-bottom: 30px;
    }

    .button-daftar {
        display: flex;
        width: 327px;
        height: 48px;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: #068113;
        background: #068113;
        margin-bottom: 15px;
        color: #FFF;
        font-size: 14px;
        cursor: pointer;
    }

    .button-masuk {
        display: flex;
        width: 327px;
        height: 48px;
        padding: 8px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: 1.5px solid #068113;
        background: #fff;
        margin-bottom: 10px;
        color: #068113;
        font-size: 14px;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .container-onboarding {
            max-width: 100%;
            margin-left: 0px;
            height: 0px;
            min-height: 98vh;
            margin-top: 8px;
        }

        .image-logo {
            margin-top: 0px;
        }

        .container-boxes {
            margin-top: 50px;
        }
    }
</style> 
<body>
    <div class="container-onboarding">
        <img class="image-logo" src="{{ asset('img/onboarding1.svg') }}" alt="Gambarimage" id="logoImage">
        <div class="container-boxes">
            <div class="box" id="box1" style="background-color: #068113;"></div>
            <div class="box" id="box2"></div>
            <div class="box" id="box3"></div>
        </div>
        <div class="deskripsi">
            <h1 id="heading">Bingung mau nitip<br>barang dimana?</h1>
            <p id="paragraf">Nikmati pengalaman menitipkan barang<br>yang lebih nyaman dengan titipsini.com</p>
        </div>
        <button 
            class="button-daftar fw-bold" 
            type="button" 
            onclick="window.location=`{{ route('register.loading') }}`">
            Daftar
        </button>
        <button 
            class="button-masuk fw-bold" 
            type="button" 
            onclick="window.location=`{{ route('login.loading') }}`">
            Masuk
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        const box1 = document.getElementById('box1');
        const box2 = document.getElementById('box2');
        const box3 = document.getElementById('box3');
        const heading = document.getElementById('heading');
        const paragraf = document.getElementById('paragraf');
        const logoImage = document.getElementById('logoImage');

        box1.addEventListener('click', function() {
            box1.style.backgroundColor = '#068113';
            box2.style.backgroundColor = '#D4DBEA';
            box3.style.backgroundColor = '#D4DBEA';
            heading.innerHTML = 'Bingung mau nitip<br>barang dimana?';
            paragraf.innerHTML = 'Nikmati pengalaman menitipkan barang<br>yang lebih nyaman dengan titipsini.com';
            logoImage.src = "{{ asset('img/onboarding1.svg') }}";
        });
        box2.addEventListener('click', function() {
            box2.style.backgroundColor = '#068113';
            box1.style.backgroundColor = '#D4DBEA';
            box3.style.backgroundColor = '#D4DBEA';
            heading.innerHTML = 'Bukan Hanya<br>Penitipan Barang!';
            paragraf.innerHTML = 'Kami Juga menawarkan solusi penitipan<br>kendaraan dan bangunan Kamu';
            logoImage.src = "{{ asset('img/onboarding2.svg') }}";
        });
        box3.addEventListener('click', function() {
            box3.style.backgroundColor = '#068113';
            box1.style.backgroundColor = '#D4DBEA';
            box2.style.backgroundColor = '#D4DBEA';
            heading.innerHTML = 'Tersedia di Berbagai<br>Kota di Indonesia';
            paragraf.innerHTML = 'Kamu dapat dengan mudah menemukan<br>layanan terdekat di daerah Kamu Sendiri';
            logoImage.src = "{{ asset('img/onboarding3.svg') }}";
        });
    </script>
</body>
</html>