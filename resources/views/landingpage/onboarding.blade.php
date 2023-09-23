<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>splash screen</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<style>
.container-onboarding {
    margin: -10px auto;
    max-width: 375px;
    width: 110.7%;
    height: 812px;
    min-height: 105vh;
    border: 1px solid #333;
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center;
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
    letter-spacing: 0.588px;
}

.deskripsi p {
    color: var(--grey-500, #667085);
    text-align: center;
    font-family: Raleway;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    letter-spacing: 0.176px;
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

.button-daftar:hover {
    background: #fff;
    color: #068113;
    border: 1.5px solid #068113;
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
.button-masuk:hover {
    background: #068113;
    color: #fff;
}

@media screen and (max-width: 768px) {
    .container-onboarding {
        max-width: 104%;
        margin-left: -8px;
        height: 0px;
        min-height: 100vh;
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
    <img class="image-logo" src="{{ asset('img/onboarding1.svg') }}" alt="Gambarimage" data-aos="fade-right" data-aos-duration="1000">
    <div class="container-boxes">
        <div class="box" style="background-color: #068113;"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
    <div class="deskripsi">
        <h1>Bingung mau nitip<br>barang dimana?</h1>
        <p>Nikmati pengalaman menitipkan barang<br>yang lebih nyaman dengan titipsini.com</p>
    </div>
    <button class="button-daftar" type="button" onclick="window.location='{{ route('register.loading') }}'">Daftar</button>
    <button class="button-masuk" type="button">Masuk</button>
  </div>
</body>
</html>
