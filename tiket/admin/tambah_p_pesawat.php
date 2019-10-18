<?php
include 'koneksi.php';
include 'proteksi.php';
?>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
					<li>
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    Cari
                                </button>
                            </span>
                            </div>
                        </li>
						<br>
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
						<li class="nav2 aktif">
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
<h5 class="tambah3">Tambah Data Jadwal Perjalanan Pesawat</h5>
<br>
<form action="aksi_tambah_jp.php" id="form1" method="post">
<?php 
      $tampil="select * from pesawat"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<div class="form-group col-md-3">
<label>Id pesawat</label>
<select class="form-control" id="id_pesawat" name="id_pesawat" onclick="tampilkan()" >
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option value="<?php echo $dataTampil['id_pesawat']; ?>"> <?php echo $dataTampil['id_pesawat'];?> ( <?php echo $dataTampil['nm_pesawat'];?> <?php echo $dataTampil['kelas']; ?>)</option>
<?php 
	  }
?>
</select>
</div>
<div class="form-group col-md-3">
<label>Tanggal Berangkat</label>
<input type="date" name="tgl_ber" class="form-control">
</div>
<?php 
      $tampil="select * from bandara"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<div class="form-group col-md-3">
<label>Bandara Berangkat</label>
<select class="form-control" name="bd_ber">
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_bandara']; ?>"><?php echo $dataTampil['nm_bandara']; ?></option>
<?php 
	  }
?>
</select>
</div>
<?php 
      $tampil="select * from bandara"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<div class="form-group col-md-3">
<label>Bandara Tiba</label>
<select class="form-control" name="bd_tib">
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_bandara']; ?>"><?php echo $dataTampil['nm_bandara']; ?></option>
<?php 
	  }
?>
</select>
</div>
<div class="form-group col-md-3">
<label>Jam berangkat</label>
<input type="time" name="jm_ber" class="form-control">
</div>
<div class="form-group col-md-3">
<label>Jam tiba</label>
<input type="time" name="jm_tib" class="form-control">
</div>
<div class="form-group col-md-3">
<label>Jumlah Kursi</label>
<input type="number" name="jumlah_kursi" class="form-control" placeholder="jumlah kursi">
</div>
<div class="form-group col-md-3">
<label>No Pesawat</label>
<select class="form-control" id="no_pesawat" name="no_pesawat">
</select>
</div>
<div class="form-group col-md-3"  style="margin-top:25px;float:right;">
<input type="submit" class="btn btn-primary form-control" value="tambah">
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
	<?php
		$tampil="select * from pesawat"; 
		$qriTampil=mysql_query($tampil); 
	?>
<script>
  //script alamat
	function tampilkan(){
		
		  document.getElementById("no_pesawat").innerHTML="";
		  var nomor_pesawat=document.getElementById("form1").id_pesawat.value;
		  <?php while($dataTampil=mysql_fetch_array($qriTampil)){?>
		  if (nomor_pesawat=="<?php echo $dataTampil['id_pesawat']; ?>")
			{
				document.getElementById("no_pesawat").innerHTML="";
				<?php
					$tampil="select * from pesawat where id_pesawat='$dataTampil[id_pesawat]'"; 
					$qryTampil=mysql_query($tampil); 
				?>	

					 $("#no_pesawat")
			<?php while ($row=mysql_fetch_array($qryTampil)) {	?>
           .append("<option value='<?php echo $row['no_pesawat']; ?>'><?php echo $row['no_pesawat']; ?></option>")
				<?php
		  }
		  ?>
			}
			<?php
		  }
			?>

	}
	</script>
</html>