<?php
include('koneksi.php');
$id3=$_GET['id3'];
if($_GET['status']=='lunas'){
	mysql_query("delete from konfirmasi_bayar where id_k_bayar='$_GET[id]' ");
}
else{
mysql_query("update booking_kereta set status='bukti tidak valid' where id_booking='$id3'");
mysql_query("delete from konfirmasi_bayar where id_k_bayar='$_GET[id]' ");	
}
?>
<script>
document.location='pembayaran_kereta.php'</script>