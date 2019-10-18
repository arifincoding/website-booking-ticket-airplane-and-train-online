<?php
require_once './koneksi.php';
$bd_ber =$_POST['bd_ber'];
$bd_tib =$_POST['bd_tib'];
$no_pesawat =$_POST['no_pesawat'];
$jm_ber =$_POST['jm_ber'];
$jm_tib =$_POST['jm_tib'];
$tgl_ber =$_POST['tgl_ber'];
$jumlah_kursi =$_POST['jumlah_kursi'];
$id_pesawat =$_POST['id_pesawat'];
mysql_query("INSERT INTO perjalanan_pes VALUES('', '$bd_ber', '$bd_tib', '$no_pesawat','$jm_ber','$jm_tib','$tgl_ber','$jumlah_kursi','$id_pesawat')");
header('location: jadwal_pesawat.php');
?>