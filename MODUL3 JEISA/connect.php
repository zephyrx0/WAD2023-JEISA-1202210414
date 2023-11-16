<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3_wad";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($koneksi->connect_error) {
    echo "Tidak berhasil terkoneksi";
}
// 
?>