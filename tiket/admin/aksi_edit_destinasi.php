<?php
include('koneksi.php');
include('proteksi.php');

$kota =$_POST['kota'];
$kategori =$_POST['kategori'];
$deskripsi =$_POST['deskripsi'];
$fileName = $_FILES['image']['name'];
$id_destinasi =$_POST['id_destinasi'];
$cekgambar=$_POST['gambar'];
if($cekgambar == "action"){
$update="update destinasi set kota='".$kota."',kategori='".$kategori."',deskripsi='".$deskripsi."',image='".$fileName."'  where id_destinasi='".$id_destinasi."'";
mysql_query($update);
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
}
else{
	$update="update destinasi set kota='".$kota."',kategori='".$kategori."',deskripsi='".$deskripsi."'  where id_destinasi='".$id_destinasi."'";
mysql_query($update);
}  
header('location:destinasi.php');
?>