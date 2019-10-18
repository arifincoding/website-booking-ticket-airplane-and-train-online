<?php session_start();
ob_start();
include "koneksi.php"; 
$username = $_POST['email']; 
$pass     = $_POST['password']; 

$login=mysql_query("SELECT * FROM member WHERE email='$username' AND password='$pass'"); 
$ketemu = mysql_num_rows($login); 
$r=mysql_fetch_array($login); 

if ($ketemu > 0) { 

    $_SESSION[username1] = $r[email]; 

    $_SESSION[password] = $r[password]; 

    $_SESSION[level]= $r[level];	
	echo "<script>window.history.go(-1);</script>";
}else{
?><script>alert("Login gagal!");window.history.go(-1);</script>
<?php
echo mysql_error();
}
?>