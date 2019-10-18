<?php
require_once './koneksi.php';
$kd_stasiun =$_POST['kd_stasiun'];
$kota =$_POST['kota'];
$nm_stasiun =$_POST['nm_stasiun'];
mysql_query("INSERT INTO stasiun_kereta VALUES('', '$kd_stasiun', '$kota', '$nm_stasiun')");
header('location: tb_stasiun.php');
?>