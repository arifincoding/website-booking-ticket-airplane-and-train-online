<?php
include('koneksi.php');
?>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="home.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
if (isset($_SESSION['username1'])){
include('cari_kereta_user.php')
?>
<?php
}
else{
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
            html: true,
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
	<li><a href="index.php"><div class="warnatext">PESAWAT</div></a></li>
    <li class="active2"><a href="kereta.php"><div class="warnatext">KERETA</div></a></li>

    <li class="uplur" style="width:72px;"><a class="po-link"><div class="warnatext">LOGIN</div></a><div class="po-content hidden">
                    <div class="po-body">
                        <form action="aksi_login.php" method="post" class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
						</span>
							<input type="text" class="form-control" name="email" placeholder="  Username"></div>
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
</span><input type="email" class="form-control" name="email" class="modal2" required></div></p>
          <p>Nama Lengkap 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-user"></span>
</span>
		  <input type="text" class="form-control" name="username" class="modal2" required></div></p>
		  <p>Kata Sandi 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
</span>
		  <input type="password" id="pw1" class="form-control" name="password" class="modal2" required></div></p>
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
		  <input type="text" class="form-control" name="kota" class="modal2" required></div></p>
		  <p>Negara
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-map-marker"></span>
</span>
		  <input type="text" class="form-control" name="negara" class="modal2" required></div></p>
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
<div style="height:100%">
<div class="jumbotron">
  <img class="jumbotron2" src="image/kereta banner2.jpg">
</div>
<div class="col-md-2"></div>
<div class="table-responsive">
<h3 class="cari5"> <?php echo $_GET['dari'];?> ke <?php echo $_GET['ke'];?></h3>
<h5 class="cari5"><?php echo $_GET['pergi'];?></h5>
<button class="btn btn-primary btn-sm ubah" data-toggle="modal" data-target="#myModal3">Ubah Pencarian</button>
<table class="col-md-9 table-condensed">
<tr class="cari1">
<td>nama kereta</td>
<td>berangkat</td>
<td>tiba</td>
<td>kelas</td>
<td>harga perorang</td>
<td> </td>
</tr>
<?php
$dari=$_GET['dari'];
$ke=$_GET['ke'];
$tgl_pergi=$_GET['pergi'];
$tampil="select * from perjalanan_ker INNER JOIN kereta USING(no_kereta) where st_berangkat='$dari' && st_tiba='$ke' && tgl_pergi='$tgl_pergi'"; 
      $qryTampil=mysql_query($tampil); 
?>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<tr class="cari2">
<td><div class="cari3"><?php echo $dataTampil['nm_kereta'];?></div></td>
<td><?php echo $dataTampil['jm_berangkat'];?></td>
<td><?php echo $dataTampil['jm_tiba'];?></td>
<td><?php echo $dataTampil['kelas'];?></td>
<td><?php echo $dataTampil['ongkos_dewasa'];?></td>

<div class="modal fade" id="myModal2" role="dialog">
	<form action="aksi_login.php" method="post">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Login Dahulu!</h4>
				</div>
			<div align="center">
				<div class="modal-body modal-md">
					<div class="input-group">
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
						</span>
					<input type="text" class="form-control" name="email" placeholder="Email"/>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
						</span>
					
					<input type="password" class="form-control " name="password" placeholder="Password"/>
					</div>
					<br/>
				</div>
			</div>
			
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	  </div>
	</div>
  </form>
</div>


<td><div style="margin:10px; float:right; margin-right:10px;"><button data-toggle="modal" data-target="#myModal2" class="btn btn-sm btn-primary">pesan sekarang</button></div></td>
</tr>
<?php
	  }
	  ?>
</table>
</div>
<div class="col-md-2"></div>
<?php
}
?>

<script>
  function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
</script>
		<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-body">
			<div class="pesan" style="margin-top:100px;background-color:white;">
<h4 class="tiket">Tiket Kereta Dengan Harga Terbaik</h4>
<div class="tiket2"> 
<form action="cari_kereta.php" method="get">
<div class="pesan2">
<p class="tiket3">Dari :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-map-marker"></span>
</span>
<?php
      $tampil="select * from stasiun_kereta"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<select class="form-control pilih" name="dari"  required>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_stasiun']; ?>"><?php echo $dataTampil['nm_stasiun']; ?></option>
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
      $tampil="select * from stasiun_kereta"; 
      $qryTampil=mysql_query($tampil); 
	  ?>
<select class="form-control pilih" name="ke" required>
<?php
      while ($dataTampil=mysql_fetch_array($qryTampil)) {		  
     ?> 
<option name="<?php echo $dataTampil['nm_stasiun']; ?>"><?php echo $dataTampil['nm_stasiun']; ?></option>
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
<input class="form-control" type="number" min="1" max="4" value="1" name="dewasa"  required>
</div>
</div>
<div class="pesan2">
<p class="tiket3">Penumpang Balita :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span>
</span>
<input class="form-control" value="0" min="0" max="2" type="number" name="balita">
</div>
</div>
<div style="clear:both;"></div>
<div class="pesan2">
<p class="tiket3" style="margin-top:16px;">Pergi :</p>
<div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgper" type="date" name="pergi" required>
</div>
</div>
<p class="tiket3" style="margin-top:14px;">
<input type="checkbox" id="yourBox" name="pilih">Pulang :</p>
<div class="input-group pulang">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgpul" disabled id="yourText" type="date" name="pulang">
</div>
<button class="btn btn-sm btn-primary pesan3"><span class="glyphicon glyphicon-search"><span class="pesan5"> Cari Kereta</span></span></button>
</form>
</div>
</div>
<script>
document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>
        </div>
    </div>
	</div>