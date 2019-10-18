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
	<li><a href="logpesawat.php">
	<div class="warnatext">PESAWAT</div></a></li>
    <li class="active2"><a href="logkereta.php"><div class="warnatext">KERETA</div></a></li>
	<li><a class="dropdown2" data-toggle="dropdown" href="">
		<div class="warnatext">
			<img class="thum" src="image/<?php echo $dataTampilq['image']; ?>">
				<div class="admin"><?php echo $_SESSION['username1'];?>
				<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a style="color:black;" href="#">setting</a></li>
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
<h4 class="transfer2">Select a Destination Account</h4>
<form method="get" action="no_rekening_pesawat.php">
<div class="transfer">
<div class="radio">
    <input id="radio-1" name="bank" type="radio" value="bri">
    <label for="radio-1" class="radio-label">BRI</label>
	<img src="image/logo_BRI.png" class="transfer3">
  </div>
</div>
<div class="transfer">
<div class="radio">
    <input id="radio-2" name="bank" type="radio" value="bca">
    <label for="radio-2" class="radio-label">BCA</label>
	<img src="image/bca.png" class="transfer3">
  </div>
</div>
<div class="transfer">
<div class="radio">
    <input id="radio-3" name="bank" type="radio" value="mandiri">
    <label for="radio-3" class="radio-label">Mandiri</label>
	<img src="image/mandiri.png" class="transfer3">
  </div>
</div>
<div class="transfer">
<div class="radio">
    <input id="radio-4" name="bank" type="radio" value="bni">
    <label for="radio-4" class="radio-label">BNI</label>
	<img src="image/bni.png" class="transfer3">
  </div>
</div>
<br>
<?php
$id=$_GET['id'];
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
<h4 class="transfer2">Detail Harga</h4>
<table class="transfer5">
<tr>
<td><?php echo $dataTampil['nm_pesawat'];?><br><br><p> </p></td>
<td class="transfer4"><?php echo $dataTampil['bd_berangkat'];?> <?php echo $dataTampil['bd_tiba'];?><br><br><p> </p></td>
</tr>
<tr>
<td>Dewasa (<?php echo $dataTampil['jumlah_p_d'];?>)<br><br><p> </p></td>
<td><div class="transfer4">Rp.<?php echo $dewasa; ?><br><br><p> </p></div></td>
</tr>
<tr>
<td>Balita (<?php echo $dataTampil['jumlah_p_b'];?>)<br><br><p> </p></td>
<td class="transfer4">Rp.<?php echo $balita; ?><br><br><p> </p></td>
</tr>
<tr class="transfer6">
<td>Total</td>
<td class="transfer4">Rp.<?php echo $dataTampil['total']; ?></td>
</tr>
</table>
<div class="batas"></div>
<input type="hidden" name="id_booking_p" value="<?php echo $dataTampil['id_booking_p']; ?>">
<button style="margin-top:30px;float:right;margin-right:30px;" class="btn btn-md btn-primary">Bayar</button>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
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
 Booking Id :<?php echo $dataTampil['id_booking_p'];?><br>
 <?php echo $dataTampil['tgl_pergi'];?><br>
 <?php echo $dataTampil['bd_berangkat'];?>--><?php echo $dataTampil['bd_tiba'];?>
<?php while($dataTampil2=mysql_fetch_array($qrytampil2)){
	?><p> -<?php echo $dataTampil2['nama'];?></p>
<?php
	}
?>
</div>