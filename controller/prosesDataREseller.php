<?php 
include '../model/databaseResel.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['nama'],$_POST['gender'],$_POST['email'],$_POST['alamat'],$_POST['username'],$_POST['password']);
    header("location:../view/examples/table.php");
}elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/examples/table.php");
}
elseif ($aksi == "update") {
    $db->update($_POST['id'],$_POST['nama'],$_POST['gender'],$_POST['email'],$_POST['alamat'],$_POST['username']);
    header("location:../view/examples/table.php");
    
}
elseif ($aksi == "edit") {
    $db->update($_POST['id'],$_POST['nama'],$_POST['gender'],$_POST['email'],$_POST['alamat'],$_POST['username']);
    header("location:../view/examples/table.php");
}
?>