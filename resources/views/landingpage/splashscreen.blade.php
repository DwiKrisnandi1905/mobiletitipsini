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
    body {
        background-color: #068113;
    }

    .container-coba {
        margin: -10px auto;
        max-width: 375px;
        width: 110.7%;
        height: auto;
        min-height: 97vh;
        display: flex;
        flex-direction: column;
        background-color: #068113;
        justify-content: center;
        align-items: center;
    }

    .additional-image {
        margin-top: auto;
        align-self: center;
        animation: moveUp 1.5s ease-in-out forwards;
    }

    .image-logo {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translateX(-50%, -50%);
        animation: moveUp 1s ease-in-out forwards;
    }

    @keyframes moveUp {
        0% {
            transform: translateY(100%);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
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
        animation: moveUp 1.5s ease-in-out forwards;
    }

    @media screen and (max-width: 768px) {
        body {
            background-color: #068113;
        }

        .container-coba {
            max-width: 105.7%;
            margin-left: -15px;
        }

        .image-logo {
            position: absolute;
            top: 30%;
            left: 15%;
            transform: translate(-50%, -50%);
        }

        .additional-image {
            margin-left: 10px;
            margin-bottom: -20px;
        }

        .centered-text {
            bottom: 4%;
            left: 31%;
        }
    }
</style>

<body>
    <div class="container-coba">
        <img class="image-logo" src="{{ asset('img/Logo.svg') }}" alt="Gambarimage">
        <img class="additional-image" src="{{ asset('img/Vector 3.svg') }}" alt="Gambarimage" data-aos="fade-right" data-aos-duration="1000">
        <div class="centered-text">Versi Aplikasi 1.0.0.0</div>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('landingpage.onboarding') }}";
        }, 3500);
    </script>
</body>
</html>