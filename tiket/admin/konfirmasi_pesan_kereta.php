<?php
include('koneksi.php');

$id=$_GET['id'];
mysql_query("update booking_kereta set status='lunas' where id_booking='".$id."'");

$tampil="select * from perjalanan_ker where id_ker='$_GET[id2]' && tgl_pergi='$_GET[tgl_pergi]'"; 
$qryTampil=mysql_query($tampil); 
$dataTampil=mysql_fetch_array($qryTampil);
$total=$_GET['jumlah_p_b'] + $_GET['jumlah_p_d'];
$total2=$dataTampil['jumlah_kursi'] - $total;
mysql_query("update perjalanan_ker set jumlah_kursi='$total2' where id_p_kereta='".$dataTampil['id_p_kereta']."'");
header('location:pesan_kereta.php');
?>