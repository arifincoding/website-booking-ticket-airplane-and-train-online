<?php
require_once './koneksi.php';
$nm_pesawat =$_POST['nm_pesawat'];
$no_pesawat =$_POST['no_pesawat'];
$kelas =$_POST['kelas'];
$ongkos_balita =$_POST['ongkos_balita'];
$ongkos_dewasa =$_POST['ongkos_dewasa'];
$fasilitas =$_POST['fasilitas'];
$fileName = $_FILES['image']['name'];
mysql_query("INSERT INTO pesawat VALUES('', '$nm_pesawat', '$no_pesawat', '$kelas', '$ongkos_balita', '$ongkos_dewasa','$fileName','$fasilitas')");
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
header('location: pesawat.php');
?>