<?php
require_once './koneksi.php';
$id_pesan =$_POST['id_pesan'];
$fileName = $_FILES['image']['name'];
mysql_query("INSERT INTO konfirmasi_bayar VALUES('', '$id_pesan', '$fileName')");
move_uploaded_file($_FILES['image']['tmp_name'], "admin/bukti/".$_FILES['image']['name']);
$update="update booking_kereta set status='tunggu konfirmasi' where id_booking='".$id_pesan."'";
mysql_query($update);
?>
<script>alert("bukti berhasil dikurim tunggu konfirmasi dari admin!");document.location.href="pesan.php"</script>