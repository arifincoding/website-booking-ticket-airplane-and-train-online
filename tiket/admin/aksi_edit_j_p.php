<?php
include('koneksi.php');
include('proteksi.php');

$bd_ber =$_POST['bd_ber'];
$bd_tib =$_POST['bd_tib'];
$no_pesawat =$_POST['no_pesawat'];
$jm_ber =$_POST['jm_ber'];
$jm_tib =$_POST['jm_tib'];
$tgl_ber =$_POST['tgl_ber'];
$jumlah_kursi =$_POST['jumlah_kursi'];
$id_pesawat =$_POST['id_pesawat'];
$id_p_pesawat=$_POST['id_p_pesawat'];

$update="update perjalanan_pes set bd_berangkat='".$bd_ber."',bd_tiba='".$bd_tib."',no_pesawat='".$no_pesawat."',jm_berangkat='".$jm_ber."',jm_tiba='".$jm_tib."',tgl_pergi='".$tgl_ber."',jumlah_kursi='".$jumlah_kursi."',id_pes='".$id_pesawat."' where id_p_pesawat='".$id_p_pesawat."'";
mysql_query($update);  
header('location:jadwal_pesawat.php');
?>