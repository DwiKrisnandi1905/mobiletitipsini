<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.loading-container {
    text-align: center;
}

</style>
<body>
    <div class="loading-container">
        <h1>Loading...</h1>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('register.daftar') }}";
        }, 1000); // Mengatur waktu delay 2 detik (2000 milidetik)
    </script>
</body>
</html>
