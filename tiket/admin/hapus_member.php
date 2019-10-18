<?php
include('koneksi.php');
mysql_query("delete from member where id_member='$_GET[id]' ");
?>
<script>
document.location='member.php'</script>