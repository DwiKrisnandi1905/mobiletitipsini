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
    <title>Login</title>
</head>
<style>
    body {
        font-family: 'Raleway', 'san-serif';
    }

    @media screen and (max-width: 768px) {
        .navbar-login {
            display: flex;
            width: 390px;
            height: 50px;
            padding: 0px 32px 0px 24px;
            align-items: center;
            gap: 32px;
            border-bottom: 1px solid #ccc;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .button-masuk {
            display: flex;
            height: 48px;
            padding: 8px 16px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            border-radius: 8px;
            background: var(--primary-500, #068113);
            text-decoration: none;
            color: white;
        }

        .button-masuk:hover {
            color: white;
        }
    }
</style>

<body>
    <nav class="navbar-login">
        <a href="{{ route('landingpage.onboarding') }}" style="color: black">
            <i class="bi bi-chevron-left"></i>
        </a>
        <h1 class="fs-6 fw-bold" style="margin-left: 100px; margin-top: 8px;">Masuk</h1>
    </nav>
    <div class="d-flex pt-5 pb-4 justify-content-center">
        <img src="{{ asset('img/Logo2.svg') }}">
    </div>
    <form action="" method="POST">
        <div class="container p-4">
            <div class="form-group">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email" style="background-color: #e8f0fe;" required>
            </div>
            <div class="form-group mt-3">
                <label for="password" class="form-label fw-bold">
                    Kata Sandi
                </label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" style="border-right: none; background-color: #e8f0fe;" required>
                    <span class="input-group-text" style="border-left: none; background-color: #e8f0fe;">
                        <i id="togglePassword" class="bi bi-eye-slash" style="color: gray;"></i>
                    </span>
                </div>
            </div>
            <div class="form-group mt-3">
                <a href="" style="color: #068113; float: right; text-decoration: none;">Lupa Kata Sandi?</a>
            </div>
            <div class="form-group" style="margin-top: 56px;">
                <a href="" class="button-masuk" style="font-weight: bold">Masuk</a>
            </div>
            <div class="form-group mt-4 text-center">
                <p>Belum punya akun? <a href=" {{ route('register.daftar') }}" style="text-decoration: none; color:#068113; font-weight: bold;">Daftar disini</a></p>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.classList.toggle('bi-eye');
            togglePassword.classList.toggle('bi-eye-slash');
        });
    </script>
</body>



</html>