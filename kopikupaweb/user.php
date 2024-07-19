<?php  
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopi Kupa</title>

    <!-- Gaya Huruf -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Ikon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi<span>Kupa</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="../kopikupaweb/pesanan_pembeli.php" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="../kopikupaweb/logout.php"><i data-feather="log-out"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>
        Ngantuk saat ngampus? Biar tetap semangat jangan lupa segarkan harimu dengan #KopiKupa!
        </p>
        <a href="menu_pembeli.php" class="cta">Beli Sekarang</a> 
      </main>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="../kopikupa/img/about.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kopi kami?</h3>
          <p>
          1. Kopi kami membahagiakan

Jika kamu mengalami hari yang buruk, secangkir kopi dapat memperbaiki mood kamu.. apalagi ditemani orang yang kamu sayang
          </p>
          <p>
          2. Memperkuat pertemanan

"Ngopi yuk!" Siapa sih yang ga pernah denger kalimat itu? Kopi kami bisa menjadi "pelebur batas" yang bisa mendekatkan kamu dengan sahabatmu lho..
          </p>
        </div>
      </div>
    </section>

    <!-- About Section End -->

    <!-- Menu Section Start -->

    <section id="menu" class="menu">
      <h2><span>Menu Utama</span> Kami</h2>

      <div class="row">
        <div class="menu-card">
          <img
            src="../kopikupa/img/kopi.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">Espresso</h3>
          <p class="menu-card-price">Rp. 20000</p>
        </div>
        <div class="menu-card">
          <img
            src="../kopikupa/img/kopi2.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">Cappucino</h3>
          <p class="menu-card-price">Rp. 25000</p>
        </div>
        <div class="menu-card">
          <img
            src="../kopikupa/img/kopi9.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">Americano</h3>
          <p class="menu-card-price">Rp. 27000</p>
        </div>
        <div class="menu-card">
          <img
            src="../kopikupa/img/kopi4.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">Vanilla Latte</h3>
          <p class="menu-card-price">Rp. 26000</p>
        </div>
      </div>
    </section>

    <!-- Menu Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505882.9227092983!2d110.42428744999997!3d-7.873046949999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x6d1b92b2cac8b3f0!2sDaerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1684196020768!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nohp" />
          </div>
          <button type="submit" class="btn">Kirim pesan</button>
        </form>
      </div>
    </section>

    <!-- Contact Section End -->

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
        <p>Created by <a href="">Kopi Kupa</a>. | &copy; 2023.</p>
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
