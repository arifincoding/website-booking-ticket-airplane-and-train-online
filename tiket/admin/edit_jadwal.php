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
	<li><a href="tambah.php"><span class="glyphicon glyphicon-file"></span></a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
  </ul>
    </div>
</nav>
<div class="navbar-default col-md-2 side" role="navigation">
                <div class="navbar-collapse">
                    <ul class="nav">
                        <li class="nav2 aktif">
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
<h5 class="tambah3">Edit Data Jadwal Perjalanan Kereta</h5>
<br>
<?php 

$id=$_GET['id'];
$sqlTampil2="select * from perjalanan_ker Where id_p_kereta = '$id'";  
      $qryTampil2=mysql_query($sqlTampil2);  
      $dataTampil2=mysql_fetch_array($qryTampil2);  

 ?>
<form action="aksi_edit_jadwal.php" id="form1" method="post">
<?php 
      $tampil="select * from kereta"; 
      $qryTampil=mysql_query($tampil); 
	  
	  $tampil3="select * from kereta where id_kereta = '$dataTampil2[id_ker]'"; 
      $qryTampil3=mysql_query($tampil3); 
	  $dataTampil3=mysql_fetch_array($qryTampil3);
	  ?>
<div class="form-group col-md-3">
<label>Id Kereta</label>
<select id="select01" class="form-control" id="id_kereta" name="id_kereta" onclick="tampilkan()" >
<option value="<?php echo $dataTampil2['id_ker']; ?>"><?php echo $dataTampil2['id_ker']; ?>( <?php echo $dataTampil3['nm_kereta'];?> <?php echo $dataTampil3['kelas']; ?>)</option>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option value="<?php echo $dataTampil['id_kereta']; ?>"><?php echo $dataTampil['id_kereta'];?> ( <?php echo $dataTampil['nm_kereta'];?> <?php echo $dataTampil['kelas']; ?>)</option>
<?php 
	  }
?>
</select>
</div>
<div class="form-group col-md-3">
<label>Tanggal Berangkat</label>
<input type="date" name="tgl_ber" class="form-control" value="<?php echo $dataTampil2['tgl_pergi'];?>">
</div>
<?php 
      $tampil="select * from stasiun_kereta"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<div class="form-group col-md-3">
<label>Stasiun Berangkat</label>
<select class="form-control" name="st_ber">
<option name="<?php echo $dataTampil2['st_berangkat']; ?>"><?php echo $dataTampil2['st_berangkat']; ?></option>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_stasiun']; ?>"><?php echo $dataTampil['nm_stasiun']; ?></option>
<?php 
	  }
?>
</select>
<input type="hidden" name="id_p_kereta" value="<?php echo $dataTampil2['id_p_kereta'];?>">
</div>
<?php 
      $tampil="select * from stasiun_kereta"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<div class="form-group col-md-3">
<label>Stasiun Tiba</label>
<select class="form-control" name="st_tib">
<option name="<?php echo $dataTampil2['st_tiba']; ?>"><?php echo $dataTampil2['st_tiba']; ?></option>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_stasiun']; ?>"><?php echo $dataTampil['nm_stasiun']; ?></option>
<?php 
	  }
?>
</select>
</div>
<div class="form-group col-md-3">
<label>Jam berangkat</label>
<input type="time" name="jm_ber" class="form-control" value="<?php echo $dataTampil2['jm_berangkat'];?>">
</div>
<div class="form-group col-md-3">
<label>Jam tiba</label>
<input type="time" name="jm_tib" class="form-control" value="<?php echo $dataTampil2['jm_tiba'];?>">
</div>
<div class="form-group col-md-3">
<label>Jumlah Kursi</label>
<input type="number" name="jumlah_kursi" class="form-control" placeholder="jumlah kursi"value="<?php echo $dataTampil2['jumlah_kursi'];?>">
</div>
<div class="form-group col-md-3">
<label>No Kereta</label>
<select class="form-control" id="no_kereta" name="no_kereta">
<option id="select02" value="<?php echo $dataTampil2['no_kereta']; ?>"><?php echo $dataTampil2['no_kereta']; ?></option>
</select>
</div>

<script>
//function hide
document.getElementById('select01').onchange = function () {
    document.getElementById("select02").hidden = this.value != '<?php echo $dataTampil2['no_kereta'];?>';
}
		</script>

<div class="form-group col-md-3"  style="margin-top:25px;float:right;">
<input type="submit" class="btn btn-primary form-control" value="edit">
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
	<?php
		$tampil="select * from kereta"; 
		$qriTampil=mysql_query($tampil); 
	?>
<script>
  //script alamat
	function tampilkan(){
		
		  document.getElementById("no_kereta").innerHTML="";
		  var nomor_kereta=document.getElementById("form1").id_kereta.value;
		  <?php while($dataTampil=mysql_fetch_array($qriTampil)){?>
		  if (nomor_kereta=="<?php echo $dataTampil['id_kereta']; ?>")
			{
				document.getElementById("no_kereta").innerHTML="";
				<?php
					$tampil="select * from kereta where id_kereta='$dataTampil[id_kereta]'"; 
					$qryTampil=mysql_query($tampil); 
				?>	

					 $("#no_kereta")
			<?php while ($row=mysql_fetch_array($qryTampil)) {	?>
           .append("<option value='<?php echo $row['no_kereta']; ?>'><?php echo $row['no_kereta']; ?></option>")
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