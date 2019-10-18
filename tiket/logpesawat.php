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
      <button type="button"  style="background-color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
  <div id="myCarousel" class="carousel slide slide2" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/pertama.jpg" style="height:500px; width:100%">
      </div>

      <div class="item">
        <img style="height:500px; width:100%" src="image/kedua.jpg">
      </div>
    
      <div class="item">
        <img style="height:500px; width:100%" src="image/ketiga.jpg">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
<div class="pesan">
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
<input type="checkbox" id="yourBox"  name="pilih">Pulang :</p>
<div class="input-group ip2">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgpul" type="date" disabled id="yourText" name="pulang">
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
<input type="hidden" name="catatan" value="pergi">
<button class="btn btn-sm btn-primary pesan3"><span class="glyphicon glyphicon-search"><span class="pesan5"> Cari Pesawat</span></span></button>
</form>
</div>
</div>
<br>
<br>
<br>
<?php
 $tampil2="select * from destinasi where kategori='pesawat' order by id_destinasi desc limit 0, 4"; 
      $qryTampil2=mysql_query($tampil2); 
?>
	  <center><h4>Destinasi Terbaik</h4>
<div class="destinasi2">
<?php
while($dataTampil2=mysql_fetch_array($qryTampil2)){
?>
<a href="artikel_destinasi_p_user.php?id=<?php echo $dataTampil2['id_destinasi']; ?>">
<div class="destinasi3">
<img class="destinasi" src="admin/image/<?php echo $dataTampil2['image'];?>">
<div class="destinasi5">Artikel Destinasi Ke</div>
<div class="destinasi4"><?php echo $dataTampil2['kota']; ?></div>
</div>
</a>
<?php
}
?>
</div>

</div>
</center>
<center style="clear:both;"><h4 class="partner">Partner Kami</h4>
<img class="imgpartner" src="image/air asia.png">
<img class="imgpartner" src="image/logo citilink.jpg">
<img class="imgpartner" src="image/garuda-indonesia.png">
<img class="imgpartner" src="image/lion air.png"/>
<img class="imgpartner" src="image/Wing air.jpg"/>
</center>
<br>
<div class="mengapa4">
<center><h2 class="partner3">Mengapa Beli Tiket di ipinpin.com</h2>
<div class="mengapa2">
<div class="mengapa"><img class="mengapa3" src="image/tunggu.jpg"><p class="mengapa5">Pesan Tiket Pesawat,Kereta Api Terlengkap</p></div>
<div class="mengapa"><img class="mengapa3" src="image/t.jpg"><p class="mengapa5">Jaminan Pembayaran Online Aman & Mudah</p></div>
<div class="mengapa"><img class="mengapa3" src="image/jam.png"><p class="mengapa5">Layanan Pelanggan 24 jam</p></div></center>
</div>
</div>
<div class="footer" style="clear:both;">
<center><p>&copy 2018 ipinpin.com</p></center>
</div>
<script>
document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>
</body>
</html>