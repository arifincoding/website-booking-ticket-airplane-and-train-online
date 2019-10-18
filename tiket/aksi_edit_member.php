<?php
include('koneksi.php');
$email =$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$kota =$_POST['kota'];
$negara =$_POST['negara'];
$fileName = $_FILES['image']['name'];
$id_member=$_POST['id_member'];
$cekgambar=$_POST['gambar'];
if($cekgambar == "action"){
$update="update member set email='".$email."',username='".$username."',password='".$password."',kota='".$kota."',negara='".$negara."', image='".$fileName."'  where id_member='".$id_member."'";
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
mysql_query($update);
}
else{
	$update="update member set email='".$email."',username='".$username."',password='".$password."',kota='".$kota."',negara='".$negara."' where id_member='".$id_member."'";
mysql_query($update);
} 
header('location:setting.php');
?>