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
			<img class="thum" src="image/<?php echo $dataTampilq['image']; ?>">
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
<div class="jumbotron">
  <img class="jumbotron2" src="image/banner pesawat.jpg">
</div>
<div class="col-md-2"></div>
<div class="table-responsive">
<h3 class="cari5"> <?php echo $_GET['dari'];?> ke <?php echo $_GET['ke'];?></h3>
<h5 class="cari5"><?php echo $_GET['pergi'];?></h5>
<h5 class="cari5">Tiket <?php echo $_GET['catatan'];?></h5>
<button class="btn btn-primary btn-sm ubah" data-toggle="modal" data-target="#myModal">Ubah Pencarian</button>
<table class="col-md-9 table-condensed">
<tr class="cari1">
<td>nama maskapai</td>
<td>berangkat</td>
<td>tiba</td>
<td>kelas</td>
<td>fasilitas</td>
<td>harga perorang</td>
<td> </td>
</tr>
<?php
$dari=$_GET['dari'];
$ke=$_GET['ke'];
$tgl_pergi=$_GET['pergi'];
$dewasa=$_GET['dewasa'];
$balita=$_GET['balita'];
$kelas= $_GET['kelas'];
$pulang=$_GET['pulang'];
$tampil="select * from perjalanan_pes INNER JOIN pesawat USING(no_pesawat) where bd_berangkat='$dari' && bd_tiba='$ke' && tgl_pergi='$tgl_pergi' && kelas='$kelas'  "; 
      $qryTampil=mysql_query($tampil); 
?>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<tr class="cari2">
<td><div class="cari3"><img style="width:50px;height:50px; margin:10px;" src="admin\image\<?php echo $dataTampil['image'];?>"><?php echo $dataTampil['nm_pesawat'];?></div></td>
<td><?php echo $dataTampil['jm_berangkat'];?></td>
<td><?php echo $dataTampil['jm_tiba'];?></td>
<td><?php echo $dataTampil['kelas'];?></td>
<td><a href="#" data-toggle="tooltip" title="<?php echo $dataTampil['fasilitas'];?>"><i class="glyphicon glyphicon-briefcase"></i></a></td>
<td>Rp.<?php echo $dataTampil['ongkos_dewasa'];?></td>
<td>
<form action="aksi_booking_pesawat.php" method="post">
<input type="hidden" name="pergi" value="<?php echo $tgl_pergi;?>">
<input type="hidden" name="dewasa" value="<?php echo $dewasa;?>">
<input type="hidden" name="balita" value="<?php echo $balita;?>">
<input type="hidden" name="pulang" value="<?php echo $pulang;?>">
<input type="hidden" name="dari" value="<?php echo $dari;?>">
<input type="hidden" name="ke" value="<?php echo $ke;?>">
<input type="hidden" name="kelas" value="<?php echo $kelas;?>">
<input type="hidden" name="catatan" value="<?php echo $_GET['catatan'];?>">
<input type="hidden" name="no_pesawat" value="<?php echo $dataTampil['no_pesawat']?>">
<input type="hidden" name="id_pesawat" value="<?php echo $dataTampil['id_pesawat']?>">
<input type="hidden" name="email" value="<?php echo $_SESSION['username1']?>">
<input type="hidden" name="ongkos_dewasa" value="<?php echo $dataTampil['ongkos_dewasa']?>">
<input type="hidden" name="ongkos_balita" value="<?php echo $dataTampil['ongkos_balita']?>">
<div style="margin:10px; float:right; margin-right:10px;">
<?php
if($dataTampil['jumlah_kursi']=='0'){
	?>
	<h4>Tiket Habis</h4>
	<?php
}
else{
?>
<button class="btn btn-sm btn-primary">pesan sekarang</button>
<?php
}
?>
</form>
</div>
</td>

</tr>
<?php
	  }
	  ?>
</table>
<div class="batas"></div>
<br><br><br><br><br><br><br><br>
</div>
<div class="col-md-2"></div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
  function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
</script>
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-body">
			<div class="pesan" style="margin-top:100px;background-color:white;">
<h4 class="tiket">Tiket Pesawat Dengan Harga Terbaik</h4>
<div class="tiket2"> 
<form action="cari_pesawat_user.php" method="get">
<div class="pesan2">
<p class="tiket3">Dari :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-map-marker"></span>
</span>
<?php
      $tampil="select * from bandara"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<select class="form-control pilih" name="dari" required>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_bandara']; ?>"><?php echo $dataTampil['nm_bandara']; ?></option>
<?php 
	  }
?>
</select>
</div>
</div>
<div class="pesan2">
<p class="tiket3">Ke :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-map-marker"></span>
</span>
<?php
      $tampil="select * from bandara"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<select class="form-control pilih" name="ke" required>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_bandara']; ?>"><?php echo $dataTampil['nm_bandara']; ?></option>
<?php 
	  }
?>
</select>
</div>
</div>
<div class="pesan2">
<p class="tiket3">Penumpang Dewasa :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span>
</span>
<input class="form-control" type="number" value="1" min="1" max="4" name="dewasa" required>
</div>
</div>
<div class="pesan2">
<p class="tiket3">Penumpang Balita :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span>
</span>
<input class="form-control" value="0" type="number" name="balita" min="0" max="2">
</div>
</div>
<div style="clear:both;"></div>
<div class="pesan2">
<p class="tiket3" style="margin-top:20px;">Pergi :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgper" type="date" name="pergi" required>
</div>
</div>
<div class="pesan2">
<p class="tiket3" style="margin-top:14px;">
<input type="checkbox" id="yourBox" name="pilih">Pulang :</p>
<div class="input-group ip2">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgpul" disabled id="yourText" type="date" name="pulang">
</div>
</div>
<p class="tiket3" style="margin-top:16px;">
Kelas :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-briefcase"></span>
</span>
<select class="form-control pilih pil2" name="kelas" required>
<option value="ekonomi">Ekonomi</option>
<option value="bisnis">Bisnis</option>
<option value="kelas satu">Kelas Satu</option>
</select>
</div>
<button class="btn btn-sm btn-primary pesan3"><span class="glyphicon glyphicon-search"><span class="pesan5"> Cari Pesawat</span></span></button>
</form>
</div>
</div>
        </div>
    </div>
	<script>
document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>