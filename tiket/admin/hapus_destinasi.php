<?php
include('koneksi.php');
mysql_query("delete from destinasi where id_destinasi='$_GET[id]' ");
?>
<script>
document.location='destinasi.php'</script>