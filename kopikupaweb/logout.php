<?php 
// Menghapus session yang telah dibuat
session_start();
session_destroy();
header('location: ../kopikupaweb/index.php');

?>