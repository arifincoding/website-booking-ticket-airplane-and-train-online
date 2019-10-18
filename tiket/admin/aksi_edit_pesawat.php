<?php
require_once './koneksi.php';
$nm_pesawat =$_POST['nm_pesawat'];
$no_pesawat =$_POST['no_pesawat'];
$kelas =$_POST['kelas'];
$ongkos_balita =$_POST['ongkos_balita'];
$ongkos_dewasa =$_POST['ongkos_dewasa'];
$id_pesawat = $_POST['id_pesawat'];
$fasilitas =$_POST['fasilitas'];
$fileName = $_FILES['image']['name'];
if($cekgambar == "action"){
$update="update pesawat set nm_pesawat='".$nm_pesawat."',no_pesawat='".$no_pesawat."',kelas='".$kelas."',ongkos_balita='".$ongkos_balita."',ongkos_dewasa='".$ongkos_dewasa."',fasilitas='".$fasilitas."',image='".$fileName."' where id_pesawat='".$id_pesawat."'";
mysql_query($update);  
move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
}
else{
	$update="update pesawat set nm_pesawat='".$nm_pesawat."',no_pesawat='".$no_pesawat."',kelas='".$kelas."',ongkos_balita='".$ongkos_balita."',ongkos_dewasa='".$ongkos_dewasa."',fasilitas='".$fasilitas."' where id_pesawat='".$id_pesawat."'";
mysql_query($update);  
	} 
header('location:pesawat.php');
?>