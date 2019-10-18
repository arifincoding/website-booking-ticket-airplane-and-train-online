<?php
include('koneksi.php');
mysql_query("delete from perjalanan_ker where id_p_kereta='$_GET[id]' ");
?>
<script>
document.location='jadwal_kereta.php'</script>