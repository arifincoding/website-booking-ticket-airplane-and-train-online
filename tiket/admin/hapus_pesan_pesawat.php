<?php
include('koneksi.php');
mysql_query("delete from konfirmasi_bayar_pesawat where id_booking_p='$_GET[id]' ");
mysql_query("delete from booking_pesawat where id_booking_p='$_GET[id]' ");
mysql_query("delete from list_booking_pesawat where id_booking_p='$_GET[id]' ");
?>
<script>
document.location='pesan_pesawat.php'</script>