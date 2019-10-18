<?php
include('koneksi.php');
mysql_query("delete from pesawat where id_pesawat='$_GET[id]' ");
?>
<script>
document.location='pesawat.php'</script>