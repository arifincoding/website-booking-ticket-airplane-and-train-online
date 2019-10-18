<?php
include('koneksi.php');
include('proteksi.php');
?>
<?php
$id=$_GET['id'];
$tampil="select * from pesawat INNER JOIN (perjalanan_pes INNER JOIN booking_pesawat USING(no_pesawat)) USING(id_pesawat) where id_booking_p='$id'"; 
      $qryTampil=mysql_query($tampil);
	  $dataTampil=mysql_fetch_array($qryTampil);
?>
<?php
$tampil2="select * from bandara where nm_bandara='$dataTampil[bd_berangkat]'"; 
      $qryTampil2=mysql_query($tampil2);
	  $dataTampil2=mysql_fetch_array($qryTampil2);
	  
	  $tampil3="select * from bandara where nm_bandara='$dataTampil[bd_tiba]'"; 
      $qryTampil3=mysql_query($tampil3);
	  $dataTampil3=mysql_fetch_array($qryTampil3);
?>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="home.css" rel="stylesheet" type="text/css">
<br>
<br>
<body onLoad="window.print()">
  <div class="col-md-2"></div>
<div class="col-md-8 print1"><h4 class="print2">Ipinpin.com</h4>
<h6 class="print2">E-tiket Kereta Pesawat Pergi</h6>
<div class="print4">
<img src="admin/image/<?php echo $dataTampil['image']; ?>" class="print3">
<h6>Booking Id : </h6>
<h4><?php echo $dataTampil['id_booking_p']; ?></h4>
</div>
<div class="print5">
<div class="print7"><h5>Pesawat <?php echo $dataTampil['nm_pesawat'] ?> <?php echo $dataTampil['kelas']; ?></h5></div>
<div class="print6"><h5><?php echo $dataTampil['tgl_pergi'];?></h5></div>
<div class="batas_kanan"></div>
<div class="print7">
<h5>Bandara Berangkat:</h5>
<h6><?php echo $dataTampil2['kota'] ;?></h6>
<h6><?php echo $dataTampil['bd_berangkat'];?></h6>
<h6>berangkat:<?php echo $dataTampil['jm_berangkat'];?></h6>
</div>
<div class="print6">
<h5>Bandara tiba:</h5>
<h6><?php echo $dataTampil3['kota'] ;?></h6>
<h6><?php echo $dataTampil['bd_tiba'];?></h6>
<h6>tiba : <?php echo $dataTampil['jm_tiba'];?></h6>
</div>
<div class="batas_kanan"></div>
<h5>Nomor Pesawat :<?php echo $dataTampil['no_pesawat'];?></h5>
</div>
<div class="batas"></div>
<Br>
<Br>
<h4 class="print2">Detail Penumpang</h4>
<?php
$tampil4="select * from list_booking_pesawat where id_booking_p='$dataTampil[id_booking_p]'"; 
      $qryTampil4=mysql_query($tampil4);
	  ?>
<table class="table table-condensed">
<tr>
<th>No</th>
<th>Nama Penumpang</th>
<th>Jenis Tiket</th>
</tr>
<?php
$dataTampil4=mysql_fetch_array($qryTampil4);{
?>
<tr>
<td>1</td>
<td><?php echo $dataTampil4['nama']; ?></td>
<td><?php echo $dataTampil4['kategori'];?></td>
</tr>
<?php
}
?>
</table>
</div>
</body>