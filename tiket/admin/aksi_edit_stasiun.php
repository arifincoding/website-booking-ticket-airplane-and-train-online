<?php
include('koneksi.php');
include('proteksi.php');

$kd_st =$_POST['kd_stasiun'];
$kota =$_POST['kota'];
$nm_stasiun =$_POST['nm_stasiun'];
$id_st_kereta=$_POST['id_st_kereta'];

$update="update stasiun_kereta set stasiun_kode='".$kd_st."',kota='".$kota."',nm_stasiun='".$nm_stasiun."' where id_st_kereta='".$id_st_kereta."'";
mysql_query($update);  
header('location:tb_stasiun.php');
?>