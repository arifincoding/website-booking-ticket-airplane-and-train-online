<?php
include('koneksi.php');
mysql_query("delete from konfirmasi_bayar where id_booking='$_GET[id]' ");
mysql_query("delete from booking_kereta where id_booking='$_GET[id]' ");
mysql_query("delete from list_booking where id_booking='$_GET[id]' ");
?>
<script>
document.location='pesan_kereta.php'</script>