<?php 
include('../kopikupaweb/koneksi.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }
      
      else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css" >
    <script type="text/javascript" src="js/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
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
     

  
     <div class="container">
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold" style="margin-top:8rem;">DATA PESANAN PELANGGAN</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pemesanan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Total Bayar</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor=1; ?>
          <?php 
            $ambil = mysqli_query($conn, 'SELECT * FROM pemesanan');
            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
          ?>
          <?php foreach($result as $result) : ?>

          <tr>
            <th scope="row" class="text-light"><?php echo $nomor; ?></th>
            <td class="text-light"><?php echo $result["id_pemesanan"]; ?></td>
            <td class="text-light"><?php echo $result["tanggal_pemesanan"]; ?></td>
            <td class="text-light">Rp. <?php echo number_format($result["total_belanja"]); ?></td>
            <td>
              
              <a href="detail_pesanan.php?id=<?php echo $result['id_pemesanan'] 
              ?>" class="badge badge-primary">Detail</a>
             

              <a href="../kopikupaweb/clear_pesanan.php?id=<?php echo $result['id_pemesanan'] 
              ?>" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
   <script>
        var mybutton = document.getElementById("btn-back-to-top");             
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop > 20 || 
            document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } 
        else {
            mybutton.style.display = "none";
        }
        }
        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
  </body>
  
</html>
<?php } ?>
