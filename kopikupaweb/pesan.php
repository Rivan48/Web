<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopi Kupa</title>
    <style>

    .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-image: url('../kopikupa/img/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    }    

    .navbar-logo {
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    font-style: italic;
    }

    .navbar-nav a span {
        font-weight: 700;
        font-family: Poppins;
    }

    .navbar-logo span {
    color: #b6895b;
    }

    .navbar-nav a {
    color: #fff;
    display: inline-block;
    font-size: 1.4rem;
    margin: 0 1rem;
    }

    .navbar-nav a:hover {
    color: #b6895b;
    }

    .navbar-nav a::after {
    content: '';
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.2s linear;
    }

    .navbar-nav a:hover::after {
    transform: scaleX(0.5);
    }

    footer {
    background-color: #b6895b;
    text-align: center;
    padding: 1rem 0;
    margin-top: 0;
    padding-bottom: 3rem;
    }

    footer .socials {
    padding: 1rem 0;
    }

    footer .socials a {
    color: #fff;
    margin: 1rem;
    }

    footer .socials a:hover {
        color: #b6895b;
    }

    footer .credit span {
        color: #b6895b;
    }

    footer .credit a {
    color: #010101;
    font-weight: 700;
    }

    .h2 b {
        margin-left: 3rem;
        color: #fff;
    }

    .form {
        margin-left: 3rem;
        color: #fff;
    }


    </style>
    <!-- Gaya Huruf -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- Ikon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>    
    <!-- Navbar Start -->
    <nav class="navbar navbar-dark bg-dark p-4">
        <div class="navbar-logo">Kopi<span>Kupa</span>.</div>
        <div class="navbar-nav">
            <a href="index.html"><span>Home</span></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <section class="hero">
    <div>
        <h2 class="h2"><b> Pemesanan Menu</b></h1><br>
            <form class="form" method="POST" action="pesanan.php">
                Nama Menu<br>
                <input type="text" name="nama"><br>
                Jumlah <br>
                <input type="number" name="jumlah" value="1" min="1"><br>
                Harga Barang<br>
                <input type="number" name="harga" value="15000" min="15000"><br>
                Pembayaran<br>
                <input type="radio" id="bayar" name="pembayaran" value="Cash">
                <label for="bayar">Cash</label><br>
                <input type="radio" id="bayar" name="pembayaran" value="Card">
                <label for="bayar">Card</label><br>
                <input type="radio" id="bayar" name="pembayaran" value="Other">
                <label for="bayar">Other</label><br>
                Keterangan<br>
                <textarea name="keterangan" rows="4" cols="50" placeholder="Masukkan nomor meja : "></textarea><br>
                <a href=" Kasiroutput.php"><input type="submit" value="Selesai!"></a>
            </form>
    </div>
    </section>

    <!-- Footer Start -->

    <footer class="bg-dark p-3 text-white">
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a>KopiKupa.</a> | &copy; 2023.</p>
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Ikon -->
    <script>
    feather.replace();
    </script>

    <!-- Javascript -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>