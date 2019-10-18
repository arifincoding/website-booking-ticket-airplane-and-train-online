<?php
session_start();
if (isset($_SESSION['username'])){
header('location: jadwal_kereta.php');
?>

<?php
}else{
?>
<html>
<head>
<title>Form Login Admin</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
		<form action="aksi_login.php" method="post">
    <div class="modal-dialog modal-md login1">
        <div class="modal-header">
          <h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Login Ipinpin.com</h4>
        </div>
        <div class="modal-body">
          <p class="login2">Username
		  <div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-user"></span>
</span>
<input type="text" class="form-control" name="username"></div></p>
		  <p class="login2">Password
		  <div class="input-group">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-lock"></span>
</span>
		  <input type="password" class="form-control" name="password"></div></p>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
	  </div>
	        </form>
<?php
			}
?>
		</body>