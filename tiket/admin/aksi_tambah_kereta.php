<?php
require_once './koneksi.php';
$nm_kereta =$_POST['nm_kereta'];
$no_kereta =$_POST['no_kereta'];
$kelas =$_POST['kelas'];
$subkelas =$_POST['subkelas'];
$ongkos_balita =$_POST['ongkos_balita'];
$ongkos_dewasa =$_POST['ongkos_dewasa'];
mysql_query("INSERT INTO kereta VALUES('', '$nm_kereta', '$no_kereta', '$kelas', '$subkelas', '$ongkos_balita', '$ongkos_dewasa')");
header('location: kereta.php');
?>