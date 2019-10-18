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
						<li class="nav2 aktif">
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
						<li class="nav2 nav4">
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
<div class="tambah">
<div class="col-sm-1" style="margin-left:-70px;"></div>
<div class="col-md-9 tambah2">
<h5 class="tambah3">Tambah Data Kereta</h5>
<br>
<form action="aksi_tambah_kereta.php" method="post">
<div class="form-group col-md-3">
<label>Nama Kereta</label>
<input type="text" name="nm_kereta" class="form-control" placeholder="nama kereta">
</div>
<div class="form-group col-md-3">
<label>No Kereta</label>
<input type="text" name="no_kereta" class="form-control" placeholder="nomor kereta">
</div>
<div class="form-group col-md-3">
<label>Kelas</label>
<input type="text" class="form-control" name="kelas" placeholder="kelas">
</div>
<div class="form-group col-md-3">
<label>Subkelas</label>
<input type="text" class="form-control" name="subkelas" placeholder="subkelas">
</div>
<div class="form-group col-md-3">
<label>Ongkos Balita</label>
<input type="text" class="form-control" name="ongkos_balita" placeholder="ongkos balita">
</div>
<div class="form-group col-md-3">
<label>Ongkos Dewasa</label>
<input type="text" class="form-control" name="ongkos_dewasa" placeholder="ongkos dewasa">
</div>
<div class="form-group col-md-3"  style="margin-top:25px;float:right;">
<input type="submit" value="Tambah" class="btn btn-primary form-control">
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</html>