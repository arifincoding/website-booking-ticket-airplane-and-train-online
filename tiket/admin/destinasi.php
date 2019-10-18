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
	<li><a href="tambah_destinasi.php"><span class="glyphicon glyphicon-file"></span></a></li>
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
						<li class="nav2 aktif">
                            <a class="nav3" href="destinasi.php">destinasi</a>
                        </li>
                    </ul>
                </div>
            </div>
			<?php 
      include 'koneksi.php';
  $halaman = 4;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysql_query("SELECT * FROM destinasi");
  $total = mysql_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysql_query("select * from destinasi order by id_destinasi desc LIMIT $mulai, $halaman")or die(mysql_error);
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
<h3 class="judul">Data Destinasi</h3>
<div class="table-responsive col-md-10">
<div class="container-fluid">
  <table class="table table-bordered table-condensed table-hover">
  <?php
	  if($query){
	  $num = mysql_num_rows($query);
	  if($num){
		  ?>
    <thead>
      <tr>
        <td class="ukuran">id destinasi</td>
        <td class="ukuran">Kota</td>
        <td class="ukuran">Kategori</td>
		<td class="ukuran">Deskripsi</td>
		<td class="ukuran">Image</td>
		<td class="ukuran">Menu</td>
      </tr>
    </thead>
    <tbody>
	<?php
      while ($dataTampil=mysql_fetch_array($query)) {		  
     ?> 
      <tr>
        <td class="ukuran2"><?php echo $dataTampil['id_destinasi']; ?></td>
        <td class="ukuran2"><?php echo $dataTampil['kota']; ?></td>
        <td class="ukuran2"><?php echo $dataTampil['kategori']; ?></td>
		<td class="ukuran2"><?php echo $dataTampil['deskripsi']; ?></td>
		<td class="ukuran2"><?php echo $dataTampil['image']; ?></td>
		<td class="ukuran2"><center><a data-toggle="tooltip" title="edit" href="edit_destinasi.php?id=<?php echo $dataTampil['id_destinasi']; ?>"><span style="color:blue;" class="glyphicon glyphicon-edit"></span></a> | <a data-toggle="tooltip" title="hapus" href="hapus_destinasi.php?id=<?php echo $dataTampil['id_destinasi']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus destinasi id <?php echo $dataTampil['id_destinasi'];?>')"><span style="color:red;"class="glyphicon glyphicon-trash"></span></center></td>
      </tr>
	  <?php 
	}
	  }
	  else{
		  echo "  belum ada data <a href='tambah_destinasi.php'>klik disini</a>";
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