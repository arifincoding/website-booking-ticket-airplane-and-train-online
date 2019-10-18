<html>
<?php
include 'koneksi.php';
include 'proteksi.php';
?>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" style="background-color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><div class="warnatext3">Ipinpin.com</div></a>
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav  navbar-right nav3">
	  	<li><a href="tambah_pesawat.php"><span class="glyphicon glyphicon-file"></span></a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
  </ul>
    </div>
</nav>

<div class="navbar-default col-md-2 side" role="navigation">
                <div class="navbar-collapse">
                    <ul class="nav">
                        <li class="nav2 nav4">
                            <a class="nav3" href="jadwal_kereta.php">Perjalan Kereta</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="tb_stasiun.php">Stasiun</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="kereta.php">Kereta</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="pesan_kereta.php">Pesan Tiket Kereta</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="pembayaran_kereta.php">bukti pembayaran kereta</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="jadwal_pesawat.php">Jadwal Pesawat</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="tb_bandara.php">Bandara</a>
                        </li>
						<li class="nav2 aktif">
                            <a class="nav3" href="pesawat.php">Pesawat</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="pesan_pesawat.php">Pesan Tiket Pesawat</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="pembayaran_pesawat.php">bukti pembayaran pesawat</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="member.php">member</a>
                        </li>
						<li class="nav2 nav4">
                            <a class="nav3" href="destinasi.php">destinasi</a>
                        </li>
                    </ul>
                </div>
            </div>
			<?php 

$id=$_GET['id'];
$sqlTampil="select * from pesawat Where id_pesawat = '$id'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  

 ?>
<div class="tambah">
<div class="col-sm-1" style="margin-left:-70px;"></div>
<div class="col-md-9 tambah2">
<h5 class="tambah3">Edit Data Pesawat</h5>
<br>
<form action="aksi_edit_pesawat.php" method="post">
<div class="form-group col-md-3">
<label>Nama Pesawat</label>
<input type="text" name="nm_pesawat" class="form-control" placeholder="nama pesawat" value="<?php echo $dataTampil['nm_pesawat']; ?>">
</div>
<div class="form-group col-md-3">
<label>No Pesawat</label>
<input type="text" name="no_pesawat" class="form-control" placeholder="nomor pesawat" value="<?php echo $dataTampil['no_pesawat']; ?>">
</div>
<div class="form-group col-md-3">
<label>Kelas</label>
<input type="text" class="form-control" name="kelas" placeholder="kelas" value="<?php echo $dataTampil['kelas']; ?>">
</div>
<div class="form-group col-md-3">
<label>Ongkos Balita</label>
<input type="text" class="form-control" name="ongkos_balita" placeholder="ongkos balita" value="<?php echo $dataTampil['ongkos_balita']; ?>">
</div>
<div class="form-group col-md-3">
<label>Ongkos Dewasa</label>
<input type="text" class="form-control" name="ongkos_dewasa" placeholder="ongkos dewasa" value="<?php echo $dataTampil['ongkos_dewasa']; ?>">
<input type="hidden" class="form-control" name="id_pesawat" value="<?php echo $dataTampil['id_pesawat']; ?>">
</div>
<div class="form-group col-md-3">
<label>Fasilitas</label>
<input type="text" class="form-control" name="fasilitas" placeholder="fasilitas" value="<?php echo $dataTampil['fasilitas']; ?>">
</div>
<script type="text/javascript">
		function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
		oFReader.onload = function (oFREvent)
 {
		document.getElementById("cekgambar").value="action";
};
};
</script>
<div class="form-group col-md-3">
<label>Foto</label>
<input id="uploadImage" type="file" name="image" class="form-control" onchange="PreviewImage();">
<input type="hidden" name="gambar" id="cekgambar">
</div>
<div class="form-group col-md-3"  style="margin-top:25px;float:right;">
<input type="submit" value="Edit" class="btn btn-primary form-control">
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</html>