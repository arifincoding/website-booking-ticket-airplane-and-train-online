<?php
include('koneksi.php');
mysql_query("delete from bandara where id_bandara='$_GET[id]' ");
?>
<script>
document.location='tb_bandara.php'</script>