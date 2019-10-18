<?php
include('koneksi.php');
mysql_query("delete from stasiun_kereta where id_st_kereta='$_GET[id]' ");
?>
<script>
document.location='tb_stasiun.php'</script>