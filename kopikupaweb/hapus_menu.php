<?php 

include('../kopikupaweb/koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= mysqli_query($conn, "DELETE FROM menu WHERE id_menu='$id_menu'");

if($hapus)
	header('location: ../kopikupaweb/daftar_menu.php');
else
	echo "Hapus data gagal";

 ?>