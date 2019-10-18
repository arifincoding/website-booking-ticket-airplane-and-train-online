<?php
include('koneksi.php');
include('proteksi.php');
?>
<?php
$id=$_GET['id'];
$tampil="select * from kereta INNER JOIN (perjalanan_ker INNER JOIN booking_kereta USING(no_kereta)) USING(id_kereta) where id_booking='$id'"; 
      $qryTampil=mysql_query($tampil);
	  $dataTampil=mysql_fetch_array($qryTampil);
?>
<?php
$tampil2="select * from stasiun_kereta where nm_stasiun='$dataTampil[st_berangkat]'"; 
      $qryTampil2=mysql_query($tampil2);
	  $dataTampil2=mysql_fetch_array($qryTampil2);
	  
	  $tampil3="select * from stasiun_kereta where nm_stasiun='$dataTampil[st_tiba]'"; 
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
<h6 class="print2">E-tiket Kereta Api Pergi</h6>
<div class="print4">
<img src="image/kereta.png" class="print3">
<h6>Booking Id : </h6>
<h4><?php echo $dataTampil['id_booking']; ?></h4>
</div>
<div class="print5">
<div class="print7"><h5>KA <?php echo $dataTampil['nm_kereta'] ?> <?php echo $dataTampil['kelas']; ?>(<?php echo $dataTampil['subkelas']; ?>)</h5></div>
<div class="print6"><h5><?php echo $dataTampil['tgl_pergi'];?></h5></div>
<div class="batas_kanan"></div>
<div class="print7">
<h5>stasiun Berangkat:</h5>
<h6><?php echo $dataTampil2['kota'] ;?></h6>
<h6><?php echo $dataTampil['st_berangkat'];?></h6>
<h6>berangkat:<?php echo $dataTampil['jm_berangkat'];?></h6>
</div>
<div class="print6">
<h5>stasiun tiba:</h5>
<h6><?php echo $dataTampil3['kota'] ;?></h6>
<h6><?php echo $dataTampil['st_tiba'];?></h6>
<h6>tiba : <?php echo $dataTampil['jm_tiba'];?></h6>
</div>
<div class="batas_kanan"></div>
<h5>Nomor KA :<?php echo $dataTampil['no_kereta'];?></h5>
</div>
<div class="batas"></div>
<Br>
<Br>
<h4 class="print2">Detail Penumpang</h4>
<?php
$tampil4="select * from list_booking where id_booking='$dataTampil[id_booking]'"; 
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