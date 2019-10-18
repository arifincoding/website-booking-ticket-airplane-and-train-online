<html>
<head>
<?php
include('koneksi.php');
?>
<?php
session_start();
if (isset($_SESSION['username1'])){
header('location: logpesawat.php');
?>

<?php
}else{
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
  <script>
  $(document).ready(function() {

            $('.uplur > .po-link').popover({
            trigger: 'click',
            html: true, // must have if HTML is contained in popover
            // get the title and conent
            title: function() {
                return $(this).parent().find('.po-title').html();
            },
            content: function() {
                return $(this).parent().find('.po-body').html();
            },

            container: 'body',
            placement: 'bottom'

            });

        });
		
  </script>
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
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav  navbar-right nav3">
	<li class="active2"><a href="index.php"><div class="warnatext">PESAWAT</div></a></li>
    <li><a href="kereta.php"><div class="warnatext">KERETA</div></a></li>

    <li class="uplur" style="width:72px;"><a class="po-link"><div class="warnatext">LOGIN</div></a><div class="po-content hidden">
                    <div class="po-body">
                        <form action="aksi_login.php" method="post" class="form-group">
							<div class="input-group">
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
						</span>
							<input type="text" class="form-control" name="email" placeholder="email"></div>
							<br>
							<div class="input-group">
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
						</span>
							<input type="password" class="form-control" name="password" placeholder="  password">
							</div>
							<br>
							<input type="submit" value="Login" class="btn btn-sm btn-primary popuverbtn">
                        </form>
                    </div>
                 </div></li>
				 
<script type="text/javascript">
				 //validasi password
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script>
	<li><a href="#" data-toggle="modal" data-target="#myModal"><div class="warnatext2">DAFTAR</div></a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Buat Akun ipinpin.com Anda Hari Ini!</h4>
        </div>
        <div class="modal-body">
		<form action="aksi_daftar.php" method="post">
		  <p>Email
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-envelope"></span>
</span><input type="email" class="form-control" name="email" class="modal2"></div></p>
          <p>Nama Lengkap 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-user"></span>
</span>
		  <input type="text" class="form-control" name="username" class="modal2"></div></p>
		  <p>Kata Sandi 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
</span>
		  <input type="password" id="pw1" class="form-control" name="password" class="modal2"></div></p>
		  <p>Konfirmasi Kata Sandi 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
</span>
		  <input type="password" id="pw2" class="form-control" name="password2" class="modal2"></div></p>
		  <p>Kota
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-map-marker"></span>
</span>
		  <input type="text" class="form-control" name="kota" class="modal2"></div></p>
		  <p>Negara
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-map-marker"></span>
</span>
		  <input type="text" class="form-control" name="negara" class="modal2"></div></p>
        </div>
        <div class="modal-footer">
		<input type="submit" class="btn btn-primary" value="Daftar Sekarang">
        </div>
		</form>
      </div>
    </div>
  </div></li>
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
<div class="pesan">
<h4 class="tiket">Tiket Pesawat Dengan Harga Terbaik</h4>
<div class="tiket2"> 
<form action="cari_pesawat.php" method="get">
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
<input class="form-control" value="0" type="number" min="0" max="2" name="balita">
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
<a href="artikel_destinasi_p.php?id=<?php echo $dataTampil2['id_destinasi']; ?>">
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
<?php
}
?>
</html>