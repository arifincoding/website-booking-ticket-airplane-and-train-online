<?php
include('koneksi.php');
$id_booking=$_POST['id_booking'];
$id_booking2=$_POST['id_booking2'];
$titel_dewasa1=$_POST['titel_dewasa'];
$nm_dws1=$_POST['nama_dewasa'];
$kategori=$_POST['kategori'];
$jenis_booking=$_POST['jenis_booking'];
$nm_kontak=$_POST['nama_kontak'];
$titel=$_POST['titel'];
$total=$_POST['total'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$count = count($id_booking);
$sql = "insert into list_booking (id_booking,nama,kategori,jenis_booking) values";
for( $i=0; $i < $count; $i++ )
{
    $sql .= "('{$id_booking[$i]}','{$titel_dewasa1[$i]} {$nm_dws1[$i]}','{$kategori[$i]}','{$jenis_booking[$i]}')";
    $sql .= ",";
}
$sql = rtrim($sql,",");
$insert = mysql_query($sql);
$update="update booking_kereta set nama_kontak='".$titel." ".$nm_kontak."',total='".$total."',email='".$email."',no_hp='".$no_hp."',status='menunggu pembayaran' where id_booking='".$id_booking2."'";
mysql_query($update);
header('location:cara_bayar.php?id='.$id_booking2);
    exit();
?>