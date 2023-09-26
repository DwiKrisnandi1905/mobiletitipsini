<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('img/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Daftar</title>
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

        .password-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .form-control {
            flex: 1; 
        }

        #password-toggle {
            position: absolute;
            right: 10px; 
            cursor: pointer;
        }

        #confirm-password-toggle {
            position: absolute;
            right: 10px; 
            cursor: pointer;
        }
        
        .input-with-icon {
            position: relative;
        }

        .vertical-line {
            position: absolute;
            height: 63%;
            width: 1px;
            background-color: #ccc; 
            right: 260px;
            top: 0;
        }
        .input-with-icon img {
            margin-left: 10px; 
            margin-top: -70px;
        }
 
        .icon-text {
            position: absolute;
            left: 45px; 
            top: 32%;
            transform: translateY(-50%);
            font-family: Raleway;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            color: #000;
        }
        .error-message {
            color: red;
            display: none;
            font-size: 14px;
            margin-top: 5px;
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
            <input type="email" id="Email" name="email" class="form-control" placeholder="Email">
            <div class="error-message" id="email-error">Email harus diisi</div>
        </div>
        <div class="form-group">
            <label for="nama">Kata Sandi</label>
                <div class="password-container">
                    <input type="password" id="Kata Sandi" name="password" class="form-control" placeholder="Min 8 Karakter">
                    <i id="password-toggle" class="bi bi-eye-slash"></i>
                </div>
            </div>
        <div class="form-group">
            <label for="password">Konfirmasi Kata Sandi</label>
            <div class="password-container">
                <input type="password" id="Konfirmasi" name="confirmPassword" class="form-control" placeholder="Min 8 Karakter">
                <i id="confirm-password-toggle" class="bi bi-eye-slash"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="telepon">Nomor Telefon</label>
            <div class="input-with-icon">
                <span class="icon-text">+62</span>
                <input type="tel" id="telepon" name="telepon" class="form-control" style="padding-left: 90px;">
                <span class="vertical-line"></span>
                <img src="{{ asset('img/Indonesia.svg') }}" alt="Icon Telepon">
            </div>
        </div>
        <button type="button" class="btn btn-primary">Daftar</button>
        <p class="button-text">Sudah punya akun? <a href="{{ route('login.masuk') }}">Masuk disini</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
    const passwordField = document.getElementById('Kata Sandi');
    const confirmField = document.getElementById('Konfirmasi');
    const passwordToggle = document.getElementById('password-toggle');
    const confirmToggle = document.getElementById('confirm-password-toggle'); 

    passwordToggle.addEventListener('click', () => {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordToggle.classList.remove('bi-eye-slash');
            passwordToggle.classList.add('bi-eye');
        } else {
            passwordField.type = 'password';
            passwordToggle.classList.remove('bi-eye');
            passwordToggle.classList.add('bi-eye-slash');
        }
    });

    confirmToggle.addEventListener('click', () => {
        if (confirmField.type === 'password') {
            confirmField.type = 'text';
            confirmToggle.classList.remove('bi-eye-slash');
            confirmToggle.classList.add('bi-eye');
        } else {
            confirmField.type = 'password';
            confirmToggle.classList.remove('bi-eye');
            confirmToggle.classList.add('bi-eye-slash');
        }
    });
</script>
<script>
    const emailField = document.getElementById('Email');
    const emailError = document.getElementById('email-error');
    const daftarButton = document.querySelector('.btn-primary');

// Fungsi untuk menampilkan pesan kesalahan
function showError(element, message) {
    element.classList.add('is-invalid');
    element.classList.remove('is-valid');
    emailError.textContent = message;
    emailError.style.display = 'block';
}

// Fungsi untuk menghapus pesan kesalahan
function clearError(element) {
    element.classList.remove('is-invalid');
    element.classList.add('is-valid');
    emailError.textContent = '';
    emailError.style.display = 'none';
}

// Validasi saat tombol "Daftar" diklik
daftarButton.addEventListener('click', () => {
    if (emailField.value === '') {
        showError(emailField, 'Email harus diisi');
    } else {
        clearError(emailField);
        // Lanjutkan dengan proses pendaftaran atau tindakan lainnya
    }
});

// Validasi saat input Email kehilangan fokus (blur)
emailField.addEventListener('blur', () => {
    if (emailField.value === '') {
        showError(emailField, 'Email harus diisi');
    } else {
        clearError(emailField);
    }
});
</script>
</body>
</html>
