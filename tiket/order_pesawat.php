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

<div class="col-md-2"></div>

<div class="col-md-8 order1">
<?php
 $id=$_GET['id'];
 if($id==''){
$tampil="select * from perjalanan_pes INNER JOIN  (pesawat INNER JOIN booking_pesawat USING(no_pesawat)) USING(no_pesawat) where email='$_SESSION[username1]' order by id_booking_p desc";
$qryTampil=mysql_query($tampil); 
$dataTampil=mysql_fetch_array($qryTampil);
 }
 else{
	 $tampil="select * from perjalanan_pes INNER JOIN  (pesawat INNER JOIN booking_pesawat USING(no_pesawat)) USING(no_pesawat) where id_booking_p='$id' order by id_booking_p desc";
$qryTampil=mysql_query($tampil); 
$dataTampil=mysql_fetch_array($qryTampil);
 }
$total= $dataTampil['jumlah_p_d'] * $dataTampil['ongkos_dewasa']+ $dataTampil['jumlah_p_b']*$dataTampil['ongkos_balita'];?>


 <h4 class="order2">Perjalanan Pergi / <?php echo $dataTampil['nm_pesawat'];?>-<?php echo $dataTampil['kelas'];?> / <?php echo $dataTampil['tgl_pergi'];?></h4>
 <h5 class="font"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $dataTampil['bd_berangkat'];?> <span class="glyphicon glyphicon-chevron-right"></span> <?php echo $dataTampil['bd_tiba'];?></h5> 
 <p class="font"><span class="glyphicon glyphicon-user"></span> <?php echo $dataTampil['jumlah_p_d'];?> (Dewasa) x Rp.<?php echo $dataTampil['ongkos_dewasa'];?></p>
 <p class="font"><span class="glyphicon glyphicon-user"></span> <?php echo $dataTampil['jumlah_p_b'];?> (Balita) x Rp.<?php echo $dataTampil['ongkos_balita'];?></p>
 <h4 class="font">Total Rp.<?php echo $total;?></h4>
 
 <h5 class="order3">Kontak yang dapat di hubungi</h5>
 
 <form action="aksi_order_pesawat.php" method="post">
 
 <input type="hidden" name="total" value="<?php echo $total;?>">
 <input type="hidden" name="id_pesawat" value="<?php echo $dataTampil['id_pesawat'];?>">
 <input type="hidden" name="no_pesawat" value="<?php echo $dataTampil['no_pesawat'];?>">
 <input type="hidden" name="tgl_pergi" value="<?php echo $dataTampil['tgl_pergi'];?>">
 <div class="col-md-5">
 <p class="font">titel</p>
 <select class="form-control" name="titel">
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <?php
 $tampil2="select * from member where email='$_SESSION[username1]'";
 $qryTampil2=mysql_query($tampil2); 
$dataTampil2=mysql_fetch_array($qryTampil2);
?>
<div class="col-md-2"></div>
<div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_kontak" value="<?php echo $dataTampil2['username'];?>" required>
 </div>
 <div class="col-md-5">
 <p>email</p>
 <input class="form-control" type="text" name="email" value="<?php echo $dataTampil2['email']; ?>" required>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>no HP</p>
 <input class="form-control" type="text" name="no_hp" required>
 <input class="form-control" type="hidden" name="id_booking2" value="<?php echo $dataTampil['id_booking_p']; ?>">
 </div>
 <div style="clear:both;"></div>
 <?php
 
 if($dataTampil['jumlah_p_d']=='1'){
	 ?>
	 <h5 class="order3">Penumpang Dewasa 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
   <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 <?php
 }
 
 elseif($dataTampil['jumlah_p_d']=='2'){
	 ?>
	 
		<h5 class="order3">Penumpang Dewasa 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
	</div>
	<input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
	<div class="batas"></div>
	<h5 class="order3">Penumpang Dewasa 2</h5>
<div class="col-md-5">
<p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
	 <?php
 }
 elseif($dataTampil['jumlah_p_d']=='3'){
	 ?>
	 
		<h5 class="order3">Penumpang Dewasa 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
	</div>
	<input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
	<div class="batas"></div>
	
	<h5 class="order3">Penumpang Dewasa 2</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 <h5 class="order3">Penumpang Dewasa 3</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 
	 <?php
 }
  elseif($dataTampil['jumlah_p_d']=='4'){
	 ?>
	 
		<h5 class="order3">Penumpang Dewasa 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
	</div>
	<input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
	<div class="batas"></div>
	
	<h5 class="order3">Penumpang Dewasa 2</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 
 <h5 class="order3">Penumpang Dewasa 3</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 
 <h5 class="order3">Penumpang Dewasa 4</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="dewasa">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
 
	 <?php
 }
 ?>
 
 <?php
 
	if($dataTampil['jumlah_p_b']=='1'){
	?>

	<h5 class="order3">Penumpang Balita 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="balita">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
	
<?php	
	}
 elseif($dataTampil['jumlah_p_b']=='2'){
	 
	 ?>
	<h5 class="order3">Penumpang Balita 1</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
	 </div>
	 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="balita">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
	 <div class="batas"></div>
		
		<h5 class="order3">Penumpang Balita 2</h5>
	 <div class="col-md-5">
	 <p>titel</p>
 <select class="form-control" name="titel_dewasa[]" required>
 <option name="Mr.">Mr.</option>
 <option name="Mrs.">Mrs.</option>
 </select>
 </div>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <p>nama lengkap</p>
 <input class="form-control" type="text" name="nama_dewasa[]" required>
 </div>
 <input class="form-control" type="hidden" name="jenis_booking[]" value="pesawat">
   <input class="form-control" type="hidden" name="kategori[]" value="balita">
   <input class="form-control" type="hidden" name="id_booking[]" value="<?php echo $dataTampil['id_booking_p']; ?>">
 <div class="batas"></div>
	 
	 <?php
	 
 }
 ?>
 <div class="order4">
 <button class="btn btn-md btn-primary">Order</button>
 </div>
 <div class="batas"></div>
 </form>
 <br>
 <br>