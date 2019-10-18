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
$tampil="select * from member where email='$_SESSION[username1]'"; 
      $qryTampil=mysql_query($tampil); 
	  $dataTampil=mysql_fetch_array($qryTampil);
?>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right nav3">
	<li><a href="logpesawat.php">
	<div class="warnatext">PESAWAT</div></a></li>
    <li class="active2"><a href="logkereta.php"><div class="warnatext">KERETA</div></a></li>
	<li><a class="dropdown2" data-toggle="dropdown" href="">
		<div class="warnatext">
			<img class="thum" src="image/<?php echo $dataTampil['image']; ?>">
				<div class="admin"><?php echo $_SESSION['username1'];?>
				<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a style="color:black;" href="#">setting</a></li>
          <li><a style="color:black;" href="pesan.php">pesan</a></li>
          <li><a style="color:black;" href="logout.php">logout</a></li>
        </ul>
				</div>
				</div>
		</li>
  </ul>
  </div>
</nav>
<script type="text/javascript">
		function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
		oFReader.onload = function (oFREvent)
 {
		document.getElementById("uploadPreview").src = oFREvent.target.result;
		document.getElementById("cekgambar").value="action";
		
};
};
</script>
	  <form action="aksi_edit_member.php" method="post" enctype="multipart/form-data" >
<div class="col-md-3"></div>
<div class="col-md-6" style="border:solid 1px #dcdcdc; padding 10px;">
<br><br>
<input type="hidden" name="id_member" value="<?php echo $dataTampil['id_member']; ?>">
<center><div class="ha">
		   <label>
		  <img class="uploadPreview" src="image/<?php echo $dataTampil['image']; ?>" style="width:300px;height:300px;border:none;" id="uploadPreview" name="image">
		  <br>
          <input class="uploadPrevieww" required id="uploadImage" type="file" name="image" onchange="PreviewImage();">
		  <input type="hidden" name="gambar" id="cekgambar">
			 </label>
			 </div></center>
			  <p>Email
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-envelope"></span>
</span><input type="email" class="form-control" name="email" class="modal2" value="<?php echo $dataTampil['email']?>"></div></p>
          <p>Nama Lengkap 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-user"></span>
</span>
		  <input type="text" class="form-control" name="username" class="modal2" value="<?php echo $dataTampil['username']?>"></div></p>
		  <p>Kata Sandi 
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
			</span>
		  <input type="password" id="pw1" class="form-control" name="password" class="modal2" value="<?php echo $dataTampil['password']?>"></div></p>
		  <p>Kota
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-map-marker"></span>
</span>
		  <input type="text" class="form-control" name="kota" class="modal2" value="<?php echo $dataTampil['kota']?>"></div></p>
		  <p>Negara
		  <div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-map-marker"></span>
</span>
		  <input type="text" class="form-control" name="negara" class="modal2" value="<?php echo $dataTampil['negara']?>"></div></p>
			 <input class="btn btn-md btn-primary" type="submit" value="kirim">
			 </form>
			 </div>
			 <div class="batas"></diV>
			 <br>
			 <br>
			 <br>