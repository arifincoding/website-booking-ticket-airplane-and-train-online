<?php
require_once './koneksi.php';
$nm_kereta =$_POST['nm_kereta'];
$no_kereta =$_POST['no_kereta'];
$kelas =$_POST['kelas'];
$subkelas =$_POST['subkelas'];
$ongkos_balita =$_POST['ongkos_balita'];
$ongkos_dewasa =$_POST['ongkos_dewasa'];
$id_kereta = $_POST['id_kereta'];
$update="update kereta set nm_kereta='".$nm_kereta."',no_kereta='".$no_kereta."',kelas='".$kelas."',subkelas='".$subkelas."',ongkos_balita='".$ongkos_balita."',ongkos_dewasa='".$ongkos_dewasa."' where id_kereta='".$id_kereta."'";
mysql_query($update);  
header('location:kereta.php');
?>