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
						<li class="nav2 aktif">
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
			<?php 
			  include 'koneksi.php';
			  $halaman = 5;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysql_query("SELECT * FROM booking_kereta");
  $total = mysql_num_rows($result);
  $pages = ceil($total/$halaman); 
      $tampil="select * from booking_kereta order by id_booking desc LIMIT $mulai, $halaman"; 
      $qryTampil=mysql_query($tampil);   
  $no =$mulai+1; 
	  ?>
			<nav class="pagin">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
   <li class="page-item">  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
<h3 class="judul">Data Pesan Tiket Kereta</h3>
<div class="table-responsive col-md-10">
<div class="container-fluid">
  <table class="table table-bordered table-condensed table-hover">
  <?php  
	  if($qryTampil){
	  $num = mysql_num_rows($qryTampil);
	  if($num){?>
    <thead>
      <tr>
	  <td class="ukuran">No</td>
	    <td class="ukuran">Id Booking</td>
        <td class="ukuran">Id Kereta</td>
        <td class="ukuran">No Kereta</td>
		<td class="ukuran">Tanggal Pergi</td>
        <td class="ukuran">Kontak</td>
		<td class="ukuran">Penumpang Dewasa</td>
		<td class="ukuran">Penumpang Balita</td>
		<td class="ukuran">Total</td>
		<td class="ukuran">Status</td>
		<td class="ukuran">Menu Harga</td>
      </tr>
    </thead>
    <tbody>
	<?php
	$x = 1;
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
	 <?php
	 ?>
      <tr>
	  <td><?php echo $x++;?></td>
	<td class="ukuran2"><?php echo $dataTampil['id_booking']; ?></td>
        <td class="ukuran2"><?php echo $dataTampil['id_kereta']; ?></td>
        <td class="ukuran2"><?php echo $dataTampil['no_kereta']; ?></td>
		<td class="ukuran2"><?php echo $dataTampil['tgl_pergi']; ?></td>
        <td class="ukuran2">
		Nama  :<?php echo $dataTampil['nm_kontak']; ?>
		<br>
		Email :<?php echo $dataTampil['email']; ?>
		<br>
		No Hp :<?php echo $dataTampil['no_hp']; ?>
		</td>
		<?php
		$tampil2="select * from list_booking where id_booking='$dataTampil[id_booking]' && kategori='dewasa'"; 
      $qryTampil2=mysql_query($tampil2); 
		$y = 1;	  
	  ?>
		<td class="ukuran2">
		<?php
		while ($dataTampil2=mysql_fetch_array($qryTampil2)) {
		?>
		<?php echo $y++; echo '.';?>
		<?php echo $dataTampil2['nama'];?><br>
				<?php
		}
		?>
		</td>
		
		<?php
		$tampil2="select * from list_booking where id_booking='$dataTampil[id_booking]' && kategori='balita'"; 
      $qryTampil2=mysql_query($tampil2); 
		$y = 1;	  
	  ?>
		<td class="ukuran2">
		<?php
		while ($dataTampil2=mysql_fetch_array($qryTampil2)) {
		?>
		<?php echo $y++; echo '.';?>
		<?php echo $dataTampil2['nama'];?><br>
				<?php
		}
		?>
		</td>
		<td><?php echo $dataTampil['total'];?></td>
		<td class="ukuran2">
		<?php echo $dataTampil['status']; ?>
		</td>
		<td class="ukuran2"><center>
		<?php
		if($dataTampil['status']=='lunas'){
			?>
			<a data-toggle="tooltip" title="hapus" href="hapus_pesan_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus pesan tiket kereta id <?php echo $dataTampil['id_booking'];?>')"><span style="color:red;"class="glyphicon glyphicon-trash"></span></center></td>

			<?php
		}
		else{
		?>
		<a data-toggle="tooltip" title="konfirmasi" href="konfirmasi_pesan_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>&id2=<?php echo $dataTampil['id_kereta'];?>&jumlah_p_d=<?php echo $dataTampil['jumlah_p_d']; ?>&jumlah_p_b=<?php echo $dataTampil['jumlah_p_b'] ?>&tgl_pergi=<?php echo $dataTampil['tgl_pergi']; ?>"><span style="color:blue;" class="glyphicon glyphicon-edit"></span></a> 
		| <a data-toggle="tooltip" title="hapus" href="hapus_pesan_kereta.php?id=<?php echo $dataTampil['id_booking']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus pesan tiket kereta id <?php echo $dataTampil['id_booking'];?>')"><span style="color:red;"class="glyphicon glyphicon-trash"></span></center></td>
      <?php
		}
	  ?>
	  </tr>
	  <?php 
	}
	  }
	  else{
		  echo "  belum ada data pemesanan";
	  }
	  }
	?> 
    </tbody>
  </table>
  </div>
  </div>
  <div style="clear:both;">
              <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>