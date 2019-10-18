<?php session_start();
ob_start();
include "koneksi.php"; 
$username = $_POST['username']; 
$pass     = md5($_POST['password']); 

$login=mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$pass'"); 
$ketemu = mysql_num_rows($login); 
$r=mysql_fetch_array($login); 

if ($ketemu > 0) { 

    $_SESSION[username] = $r[username]; 

    $_SESSION[password] = $r[password]; 

    $_SESSION[level]= $r[level];	
header('location:jadwal_kereta.php');
}else{
?><script>alert("Login gagal!");document.location.href="index.php"</script>
<?php
echo mysql_error();
}
?>