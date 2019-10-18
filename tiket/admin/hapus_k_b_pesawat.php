<?php
include('koneksi.php');
$id3=$_GET['id3'];
if($_GET['status']=='lunas'){
	mysql_query("delete from konfirmasi_bayar_pesawat where id_k_bayar='$_GET[id]' ");
}
else{
mysql_query("update booking_pesawat set status='bukti tidak valid' where id_booking_p='$id3'");
mysql_query("delete from konfirmasi_bayar_pesawat where id_k_bayar='$_GET[id]' ");
}

?>
<script>
document.location='pembayaran_pesawat.php'</script>