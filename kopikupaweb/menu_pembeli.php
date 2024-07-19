<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }
      
      else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi<span>Kupa</span>.</a>

      <div class="navbar-nav">
        <a href="user.php">Home</a>
      </div>

      <div class="navbar-extra">
        <a href="pesanan_pembeli.php" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->


<!-- Menu -->

<div style="margin-top: 7rem; text-align: center;">
    <h2>SILAHKAN PILIH MENU YANG ANDA INGINKAN</h2>
</div>

      <div style="margin-top: 5rem;" class="container" id='menu'>
        <div class="row mt-3">

          <?php 

          include('../kopikupaweb/koneksi.php');

          $query = mysqli_query($conn, 'SELECT * FROM menu');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>
            
          <div class="col-md-3 mt-4">
            <div class="card brder-dark" </div>

            <img src="../kopikupaweb/images/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
        
              <div class="card-body">
                <h5 class="card-title font-weight-bold text-black-50"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga text-danger"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="../kopikupaweb/beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-success btn-sm btn-block ">BELI</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
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