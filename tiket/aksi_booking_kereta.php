<?php
include('koneksi.php');
$id_kereta=$_POST['id_kereta'];
$no_kereta=$_POST['no_kereta'];
$tgl_pergi=$_POST['pergi'];
$email=$_POST['email'];
$dewasa=$_POST['dewasa'];
$balita=$_POST['balita'];
$pulang=$_POST['pulang'];
$dari=$_POST['dari'];
$ke=$_POST['ke'];
$catatan=$_POST['catatan'];
$total= $dewasa * $_POST['ongkos_dewasa'] + $balita * $_POST['ongkos_balita'];
$tambah="insert into booking_kereta values('','$tgl_pergi','$email','$id_kereta','$no_kereta','$dewasa','$balita','','0','$total','lengkapi data anda','$catatan')";
mysql_query($tambah);
if($pulang==''){
header('location:order_kereta.php');
}
else{
	header('location:cari_kereta_user.php?id_kereta='.$id_kereta.'&no_kereta='.$no_kereta.'&pergi='.$pulang.'&dewasa='.$dewasa.'&balita='.$balita.'&dari='.$dari.'&ke='.$ke.'&catatan=pulang');
    exit();
}
?>