<?php
include('koneksi.php');

$id=$_GET['id'];
mysql_query("update booking_pesawat set status='lunas' where id_booking_p='".$id."'");

$tampil="select * from perjalanan_pes where id_pes='$_GET[id2]' && tgl_pergi='$_GET[tgl_pergi]'"; 
$qryTampil=mysql_query($tampil); 
$dataTampil=mysql_fetch_array($qryTampil);
$total=$_GET['jumlah_p_b'] + $_GET['jumlah_p_d'];
$total2=$dataTampil['jumlah_kursi'] - $total;
mysql_query("update perjalanan_pes set jumlah_kursi='$total2' where id_p_pesawat='".$dataTampil['id_p_pesawat']."'");
header('location:pesan_pesawat.php');
?>