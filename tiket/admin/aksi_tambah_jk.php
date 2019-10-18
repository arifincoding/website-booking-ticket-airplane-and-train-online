<?php
require_once './koneksi.php';
$st_ber =$_POST['st_ber'];
$st_tib =$_POST['st_tib'];
$no_kereta =$_POST['no_kereta'];
$jm_ber =$_POST['jm_ber'];
$jm_tib =$_POST['jm_tib'];
$tgl_ber =$_POST['tgl_ber'];
$jumlah_kursi =$_POST['jumlah_kursi'];
$id_kereta =$_POST['id_kereta'];
mysql_query("INSERT INTO perjalanan_ker VALUES('', '$st_ber', '$st_tib', '$no_kereta','$jm_ber','$jm_tib','$tgl_ber','$jumlah_kursi','$id_kereta')");
header('location: jadwal_kereta.php');
?>