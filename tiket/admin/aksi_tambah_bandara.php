<?php
require_once './koneksi.php';
$kd_bandara =$_POST['kd_bandara'];
$kota =$_POST['kota'];
$nm_bandara =$_POST['nm_bandara'];
mysql_query("INSERT INTO bandara VALUES('', '$kd_bandara', '$kota', '$nm_bandara')");
header('location: tb_bandara.php');
?>