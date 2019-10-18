<?php
include('koneksi.php');
mysql_query("delete from kereta where id_kereta='$_GET[id]' ");
?>
<script>
document.location='kereta.php'</script>