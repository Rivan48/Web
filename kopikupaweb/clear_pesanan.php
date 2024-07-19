<?php 

include('koneksi.php');

$id = $_GET['id'];

$hapus= mysqli_query($conn, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");

if($hapus)
	header('location: ../kopikupaweb/pesanan.php');
else
	echo "Hapus data gagal";
 ?>