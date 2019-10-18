<?php
require_once './koneksi.php';
$kota =$_POST['kota'];
$kategori =$_POST['kategori'];
$deskripsi =$_POST['deskripsi'];
$fileName = $_FILES['image']['name'];
$insert=mysql_query("INSERT INTO destinasi VALUES('', '$kota', '$kategori', '$deskripsi','$fileName')");
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
if($insert){
	echo 'fsfsd';
}
else{
	echo 'juragan empang';
}
header('location:destinasi.php');
?>