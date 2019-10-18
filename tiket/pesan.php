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
			<img class="thum" src="image/<?php echo $dataTampilq['image'];?>">
				<div class="admin"><?php echo $_SESSION['username1'];?>
				<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a style="color:black;" href="setting.php">setting</a></li>
          <li><a style="color:black;" href="pesan.php">pesan</a></li>
          <li><a style="color:black;" href="logout.php">logout</a></li>
        </ul>
				</div>
				</div>
		</li>
  </ul>
  </div>
</nav>
<h3 align="center">Data pemesanan tiket anda</h3>
<br>
<br>
<div class="table-responsive col-md-12">
<div class="container-fluid">
  <table class="table table-bordered table-condensed table-hover">
  <?php 
      include 'koneksi.php';
      $tampil="select * from kereta INNER JOIN (perjalanan_ker INNER JOIN booking_kereta USING(no_kereta)) USING(id_kereta) where email='".$_SESSION['username1']."' order by id_booking desc"; 
      $qryTampil=mysql_query($tampil); ?>
    <thead>
      <tr>
	  <td>id booking</td>
		<td>nama kereta</td>
		<td>stasiun berangkat</td>
		<td>stasiun tiba</td>
		<td>Jumlah Dewasa</td>
		<td>Jumlah Balita</td>
		<td>Tanggal Berangkat</td>
		<td>Status</td>
		<td>Catatan</td>
		<td class="ukuran">Total</td>
		<td class="ukuran">Tindakan</td>
      </tr>
    </thead>
    <tbody>
	<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
      <tr>
	  <td><?php echo $dataTampil['id_booking']?></td>
	  <td><?php echo $dataTampil['nm_kereta'];?></td>
	  <td><?php echo $dataTampil['st_berangkat'];?></td>
	  <td><?php echo $dataTampil['st_tiba'];?></td>
	  <td><?php echo $dataTampil['jumlah_p_d'];?></td>
	  <td><?php echo $dataTampil['jumlah_p_b'] ?></td>
	  <td><?php echo $dataTampil['tgl_pergi'];?></td>
	  <td><?php echo $dataTampil['status'];?></td>
	  <td><?php echo $dataTampil['catatan'];?></td>
	  <td>Rp.<?php echo $dataTampil['total'];?></td>
	  <td><center>
	  <?php
	  if($dataTampil['status']=='menunggu pembayaran'){
	  ?>
		<a href="cara_bayar.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-sm btn-primary"><div style="font-size:12px; width:50px;"> Bayar</div> </a>
		<a href="hapus_pesan.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-sm btn-danger"onclick="return confirm('apakah anda yakin ingin menghapus booking dengan id <?php echo $dataTampil['id_booking'];?>')"><div style="font-size:12px;"> batal</div></a>
      <?php
	  }
	  elseif($dataTampil['status']=='lengkapi data anda'){
		  ?>
		  <a href="order_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-md btn-warning"><div style="font-size:12px;">Lengkapi</div></a>
		  <a href="hapus_pesan.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-sm btn-danger"onclick="return confirm('apakah anda yakin ingin menghapus booking dengan id <?php echo $dataTampil['id_booking'];?>')"><div style="font-size:12px;"> batal </div></a>
		  <?php
	  }
	  elseif($dataTampil['status']=='bukti tidak valid'){
		  ?>
		  <a href="konfirmasi_pesan_tiket_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-md btn-warning"><div style="font-size:12px;">Kirim</div></a>
		  <a href="hapus_pesan.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-sm btn-danger"onclick="return confirm('apakah anda yakin ingin menghapus booking dengan id <?php echo $dataTampil['id_booking'];?>')"><div style="font-size:12px;"> batal </div></a>
		  <?php
	  }
	  elseif($dataTampil['status']=='lunas'){
		  ?>
		  <a href="print_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-md btn-warning"><div style="font-size:12px;">E-Tiket</div></a>
		  <a href="hapus_pesan.php?id=<?php echo $dataTampil['id_booking']; ?>" class="btn btn-sm btn-danger"onclick="return confirm('apakah anda yakin ingin menghapus booking dengan id <?php echo $dataTampil['id_booking'];?>')"><div style="font-size:12px;"> Hapus</div></a>

		  <?php
	  }
	  ?>
	  </center>
	  </tr>
	  <?php 
	}
	?> 
    </tbody>
  </table>
  </div>
  </div>
  </div>
<div class="footer" style="clear:both; margin-top:100%;">
<center><p>&copy 2018 ipinpin.com</p></center>
</div>
</body>
</html>