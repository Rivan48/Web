<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }
      
      else{
?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <link rel='short icon' href='images/logo.png' >
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <title>KopiKupa.</title>

    <!-- Gaya Huruf -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Ikon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="admin.css" />
  </head>

  <body>
  <!-- Navbar Start -->
  <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi<span>Kupa</span>.</a>

      <div class="navbar-nav">
        <a href="admin.php">Home</a>
      </div>

      <div class="navbar-extra">
      <a href="../kopikupaweb/logout.php"><i data-feather="log-out"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Menu -->
    <div class="container">
      </div>
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold" style="margin-top:8rem; margin-bottom:3rem;">Selamat Datang</h3>
        </div>
        <div class="row mb-5 mt-5 ">
          <div class="col-md-6 d-flex justify-content-end">
            <div class="card bg-dark text-white border-light">
              <img src="images/menu2.jpg" class="card-img" alt="Lihat Daftar Menu">
              <div class="card-img-overlay mt-5 text-center">
               <a href="daftar_menu.php" class="btn btn-primary">DAFTAR MENU</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
            <div class="card bg-dark text-white border-light" >
              <img src="images/menu1.jpg" class="card-img" alt="Lihat Pesanan">
              <div class="card-img-overlay mt-5 text-center">
               <a href="pesanan.php" id="myWish" ref="javascript:;" class="btn btn-primary">DATA PESANAN</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Akhir Menu -->

<!-- Footer Start -->

<footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">KopiKupa</a>. | &copy; 2023.</p>
      </div>
    </footer>

    <!-- Footer End -->

    <!-- Ikon -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="script.js"></script>




    </body>
    </html>
<?php } ?>