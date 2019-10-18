<?php
require_once './koneksi.php';
$id_booking_p =$_POST['id_booking_p'];
$fileName = $_FILES['image']['name'];
mysql_query("INSERT INTO konfirmasi_bayar_pesawat VALUES('', '$id_booking_p', '$fileName')");
move_uploaded_file($_FILES['image']['tmp_name'], "admin/bukti/".$_FILES['image']['name']);
$update="update booking_pesawat set status='tunggu konfirmasi' where id_booking_p='".$id_booking_p."'";
mysql_query($update);
?>
<script>alert("bukti berhasil dikurim tunggu konfirmasi dari admin!");document.location.href="pesan_pesawat.php"</script>