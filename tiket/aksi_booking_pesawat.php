<?php
include('koneksi.php');
$id_pesawat=$_POST['id_pesawat'];
$no_pesawat=$_POST['no_pesawat'];
$tgl_pergi=$_POST['pergi'];
$email=$_POST['email'];
$dewasa=$_POST['dewasa'];
$balita=$_POST['balita'];
$pulang=$_POST['pulang'];
$dari=$_POST['dari'];
$ke=$_POST['ke'];
$kelas=$_POST['kelas'];
$catatan=$_POST['catatan'];
$total= $dewasa * $_POST['ongkos_dewasa'] + $balita * $_POST['ongkos_balita'];
$tambah="insert into booking_pesawat values('','$tgl_pergi','$email','$id_pesawat','$no_pesawat','$dewasa','$balita','','0','$total','lengkapi data anda','$catatan')";
mysql_query($tambah);
if($pulang==''){
header('location:order_pesawat.php');
}
else{
	header('location:cari_pesawat_user.php?id_pesawat='.$id_pesawat.'&no_pesawat='.$no_pesawat.'&pergi='.$pulang.'&dewasa='.$dewasa.'&balita='.$balita.'&dari='.$dari.'&ke='.$ke.'&kelas='.$kelas.'&catatan=pulang');
    exit();
}
?>