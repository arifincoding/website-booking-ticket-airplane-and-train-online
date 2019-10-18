<html>
<head>
<?php
include('koneksi.php');
include ('proteksi.php');
?>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="home.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-fluid" style="background-color:black;color:#fff;height:20px;">
  <p class="atas">jual beli tiket online</p>
</div>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="20">
  <div class="navbar-header">
      <button type="button" style="background-color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <div class="nav2">
      <a class="navbar-brand" href="#"><div class="warnatext3">Ipinpin.com</div></a>
    </div>
	</div>
	<?php 
	$tampilq="select * from member where email='$_SESSION[username1]'"; 
      $qryTampilq=mysql_query($tampilq); 
	  $dataTampilq=mysql_fetch_array($qryTampilq);
	?>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right nav3">
	<li class="active2"><a href="logpesawat.php">
	<div class="warnatext">PESAWAT</div></a></li>
    <li><a href="logkereta.php"><div class="warnatext">KERETA</div></a></li>
	<li><a class="dropdown2" data-toggle="dropdown" href="">
		<div class="warnatext">
			<img class="thum" src="image/<?php echo $dataTampilq['image'];?>">
				<div class="admin"><?php echo $_SESSION['username1'];?>
				<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a style="color:black;" href="setting.php">setting</a></li>
          <li><a style="color:black;" href="pesan_pesawat.php">pesan</a></li>
          <li><a style="color:black;" href="logout.php">logout</a></li>
        </ul>
				</div>
				</div>
		</li>
  </ul>
  </div>
</nav>
<div class="col-md-2"></div>
<div class="col-md-6 transfer7">
<?php
$id=$_GET['id_booking_p'];
if($id!=''){
$tampil="select * from booking_pesawat INNER JOIN (pesawat INNER JOIN perjalanan_pes USING(no_pesawat)) USING(id_pesawat) where id_booking_p = '$id'";
$qrytampil=mysql_query($tampil);
$dataTampil=mysql_fetch_array($qrytampil);
$dewasa = $dataTampil['jumlah_p_d'] * $dataTampil['ongkos_dewasa'];
$balita = $dataTampil['jumlah_p_b'] * $dataTampil['ongkos_balita'];
}
else{
	$tampil="select * from booking_pesawat INNER JOIN (pesawat INNER JOIN perjalanan_pes USING(no_pesawat)) USING(id_pesawat) where email = '$_SESSION[username1]' order by id_booking_p desc";
$qrytampil=mysql_query($tampil);
$dataTampil=mysql_fetch_array($qrytampil);
$dewasa = $dataTampil['jumlah_p_d'] * $dataTampil['ongkos_dewasa'];
$balita = $dataTampil['jumlah_p_b'] * $dataTampil['ongkos_balita'];
}
?>
<h4 class="transfer2">Tolong Transfer Ke</h4>
<br>
<?php 
if($_GET['bank']=='bri'){
?>
<table class="transfer5">
<tr>
<td>Bank Rakyat Indonesia(BRI)<br><br><p> </p></td>
<td class="transfer4"><img class="transfer3" src="image/logo_BRI.png"><br><br><p> </p></td>
</tr>
<tr>
<td>Nomor Rekening<br><br><p> </p></td>
<td><div class="transfer4">0848882350<br><br><p> </p></div></td>
</tr>
<tr>
<td>Nama Rekening<br><br><p> </p></td>
<td class="transfer4">PT.pinpin.com<br><br><p> </p></td>
</tr>
<tr>
<td>Total Transfer</td>
<td class="transfer4">Rp.<?php echo $dataTampil['total']; ?></td>
</tr>
</table>
<div class="batas"></div>
<a href="konfirmasi_pesan_tiket_pesawat.php?id=<?php echo $dataTampil['id_booking_p'];?>" style="margin-top:30px;float:right;margin-right:30px;" class="btn btn-md btn-primary">Saya Sudah Bayar</a><div class="batas"></div><br><br>
<?php
}
elseif($_GET['bank']=='bca'){
?>
<table class="transfer5">
<tr>
<td>Bank Central Asia(BCA)<br><br><p> </p></td>
<td class="transfer4"><img class="transfer3" src="image/bca.png"><br><br><p> </p></td>
</tr>
<tr>
<td>Nomor Rekening<br><br><p> </p></td>
<td><div class="transfer4">0868772350<br><br><p> </p></div></td>
</tr>
<tr>
<td>Nama Rekening<br><br><p> </p></td>
<td class="transfer4">PT.pinpin.com<br><br><p> </p></td>
</tr>
<tr>
<td>Total Transfer</td>
<td class="transfer4">Rp.<?php echo $dataTampil['total']; ?></td>
</tr>
</table>
<div class="batas"></div>
<a href="konfirmasi_pesan_tiket_pesawat.php?id=<?php echo $dataTampil['id_booking_p'];?>" style="margin-top:30px;float:right;margin-right:30px;" class="btn btn-md btn-primary">Saya Sudah Bayar</a><div class="batas"></div><br><br>
<?php
}
elseif($_GET['bank']=='mandiri'){
?>
<table class="transfer5">
<tr>
<td>Bank Mandiri<br><br><p> </p></td>
<td class="transfer4"><img class="transfer3" src="image/mandiri.png"><br><br><p> </p></td>
</tr>
<tr>
<td>Nomor Rekening<br><br><p> </p></td>
<td><div class="transfer4">0868476859<br><br><p> </p></div></td>
</tr>
<tr>
<td>Nama Rekening<br><br><p> </p></td>
<td class="transfer4">PT.pinpin.com<br><br><p> </p></td>
</tr>
<tr>
<td>Total Transfer</td>
<td class="transfer4">Rp.<?php echo $dataTampil['total']; ?></td>
</tr>
</table>
<div class="batas"></div>
<a href="konfirmasi_pesan_tiket_pesawat.php?id=<?php echo $dataTampil['id_booking_p'];?>" style="margin-top:30px;float:right;margin-right:30px;" class="btn btn-md btn-primary">Saya Sudah Bayar</a><div class="batas"></div><br><br>
<?php
}
elseif($_GET['bank']=='bni'){
?>
<table class="transfer5">
<tr>
<td>Bank Nasabah Indonesia(BNI)<br><br><p> </p></td>
<td class="transfer4"><img class="transfer3" src="image/bni.png"><br><br><p> </p></td>
</tr>
<tr>
<td>Nomor Rekening<br><br><p> </p></td>
<td><div class="transfer4">0868662357<br><br><p> </p></div></td>
</tr>
<tr>
<td>Nama Rekening<br><br><p> </p></td>
<td class="transfer4">PT.pinpin.com<br><br><p> </p></td>
</tr>
<tr>
<td>Total Transfer</td>
<td class="transfer4">Rp.<?php echo $dataTampil['total']; ?></td>
</tr>
</table>
<div class="batas"></div>
<a href="konfirmasi_pesan_tiket_pesawat.php?id=<?php echo $dataTampil['id_booking_p'];?>" style="margin-top:30px;float:right;margin-right:30px;" class="btn btn-md btn-primary">Saya Sudah Bayar</a><div class="batas"></div><br><br>
<?php
}
?>
</div>
<?php
$id=$_GET['id'];
if($id !=''){
$tampil2="select * from list_booking_pesawat where id_booking_p = '$id'";
$qrytampil2=mysql_query($tampil2);
}
else{
	$tampil2="select * from list_booking_pesawat where id_booking_p = '$dataTampil[id_booking_p]'";
$qrytampil2=mysql_query($tampil2);
}
?>
<div class="col-md-3 transfer7" style="margin-left:5%">
<h4 class="transfer2">Detail Booking</h4>
 Booking Id <?php echo $dataTampil['id_booking_p'];?><br>
 <?php echo $dataTampil['bd_berangkat'];?>--><?php echo $dataTampil['bd_tiba'];?>
<?php while($dataTampil2=mysql_fetch_array($qrytampil2)){
	?><p> -<?php echo $dataTampil2['nama'];?></p>
<?php
	}
?>
</div>