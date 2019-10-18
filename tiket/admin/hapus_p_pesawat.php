<?php
include('koneksi.php');
mysql_query("delete from perjalanan_pes where id_p_pesawat='$_GET[id]' ");
?>
<script>
document.location='jadwal_pesawat.php'</script>