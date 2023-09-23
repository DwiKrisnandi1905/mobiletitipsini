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
.container-coba {
    margin: -10px auto;
    max-width: 375px;
    width: 110.7%;
    height: 812px;
    min-height: 105vh;
    border: 1px solid #333;
    display: flex; 
    flex-direction: column; 
    background-color: #068113;
    justify-content: center; 
    align-items: center;
}
.additional-image {
    margin-top: auto; 
    align-self: center;
}
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.image-logo {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: fadeIn 1s ease-in-out; /* Apply the fadeIn animation */
}

.centered-text {
    position: absolute;
    margin-top: 710px;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    font-family: Raleway;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
}

@media screen and (max-width: 768px) {
    .container-coba {
        max-width: 110.7%;
        margin-left: -15px;
    }
    .image-logo {
    position: absolute;
    top: 50%;
    left: 52%;
    transform: translate(-50%, -50%);
    }
    .additional-image {
        margin-left: 10px;
    }
    .centered-text {
        margin-top: 770px;
    }
}
</style>
<body>
  <a href="{{ route('landingpage.onboarding') }}">
  <div class="container-coba">
    <img class="image-logo" src="{{ asset('img/Logo.svg') }}" alt="Gambarimage" data-aos="fade-right" data-aos-duration="1000">
    <img class="additional-image" src="{{ asset('img/Vector 3.svg') }}" alt="Gambarimage" data-aos="fade-right" data-aos-duration="1000">
    <div class="centered-text">Versi Aplikasi 1.0.0.0</div>
    </div>
  </a>
</body>
</html>
