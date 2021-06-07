<?php 
include '../model/databaseTransaksi.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['nohp'],$_POST['jenis'],$_POST['provider'],$_POST['nominal']);
    header("location:../view/transaksiUser.php");
}
?>