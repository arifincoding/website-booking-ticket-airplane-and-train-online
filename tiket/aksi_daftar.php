<?php
session_start();
ob_start();
require_once './koneksi.php';
$email =$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$kota =$_POST['kota'];
$negara =$_POST['negara'];
mysql_query("INSERT INTO member VALUES('', '$email', '$username', '$password','$kota','$negara','')");

$login=mysql_query("SELECT * FROM member WHERE email='$email' AND password='$password'"); 
$ketemu = mysql_num_rows($login); 
$r=mysql_fetch_array($login); 

if ($ketemu > 0) { 

    $_SESSION[username1] = $r[email]; 

    $_SESSION[password] = $r[password]; 

    $_SESSION[level]= $r[level];	
echo "<script>window.history.go(-1);</script>";
}
?>