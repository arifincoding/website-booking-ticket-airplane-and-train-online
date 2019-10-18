<?php
include('koneksi.php');
include('proteksi.php');

$kd_bd =$_POST['kd_bandara'];
$kota =$_POST['kota'];
$nm_bandara =$_POST['nm_bandara'];
$id_bandara=$_POST['id_bandara'];

$update="update bandara set kode_bandara='".$kd_bd."',kota='".$kota."',nm_bandara='".$nm_bandara."' where id_bandara='".$id_bandara."'";
mysql_query($update);  
header('location:tb_bandara.php');
?>