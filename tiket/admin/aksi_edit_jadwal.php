<?php
include('koneksi.php');
include('proteksi.php');

$st_ber =$_POST['st_ber'];
$st_tib =$_POST['st_tib'];
$no_kereta =$_POST['no_kereta'];
$jm_ber =$_POST['jm_ber'];
$jm_tib =$_POST['jm_tib'];
$tgl_ber =$_POST['tgl_ber'];
$jumlah_kursi =$_POST['jumlah_kursi'];
$id_kereta =$_POST['id_kereta'];
$id_p_kereta=$_POST['id_p_kereta'];

$update="update perjalanan_ker set st_berangkat='".$st_ber."',st_tiba='".$st_tib."',no_kereta='".$no_kereta."',jm_berangkat='".$jm_ber."',jm_tiba='".$jm_tib."',tgl_pergi='".$tgl_ber."',jumlah_kursi='".$jumlah_kursi."',id_ker='".$id_kereta."' where id_p_kereta='".$id_p_kereta."'";
mysql_query($update);  
header('location:jadwal_kereta.php');
?>