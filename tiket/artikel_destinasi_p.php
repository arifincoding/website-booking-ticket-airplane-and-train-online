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
include('artikel_destinasi_p_user.php')
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
	<li class="active2"><a href="index.php"><div class="warnatext">PESAWAT</div></a></li>
    <li><a href="kereta.php"><div class="warnatext">KERETA</div></a></li>

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
<?php
 $tampil2="select * from destinasi where id_destinasi='$_GET[id]'"; 
      $qryTampil2=mysql_query($tampil2); 
	  $dataTampil2=mysql_fetch_array($qryTampil2);
?>
	  <div class="jumbotron">
  <img class="jumbotron2" src="admin/image/<?php echo $dataTampil2['image']; ?>">
</div>
<div class="col-md-2"></div>
<div class="col-md-7">
<h3 class="cari5"> Artikel menarik Perjalanan <?php echo $dataTampil2['kategori'];?>  <?php echo $dataTampil2['kota'];?></h3>
<button class="btn btn-primary btn-sm" style="float:right; margin-top:-40px;" data-toggle="modal" data-target="#myModal3">Cari Tiket</button>
<p><?php echo $dataTampil2['deskripsi']; ?></p>
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
<input class="form-control" value="0" type="number" name="balita" min="0" max="2">
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
<input type="checkbox" name="pilih">Pulang :</p>
<div class="input-group ip2">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input class="form-control tgpul" type="date" name="pulang">
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
        </div>
    </div>