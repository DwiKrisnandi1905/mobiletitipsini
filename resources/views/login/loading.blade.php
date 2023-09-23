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
.loading-animated {
        width: 300px; 
        height: auto; 
}

</style>
<body>
    <div class="loading-container">
        <img class="loading-animated" src="{{ asset('img/loading.gif') }}" alt="Gambarimage" data-aos="fade-right" data-aos-duration="1000">
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('login.masuk') }}";
        }, 1000); 
    </script>
</body>
</html>
