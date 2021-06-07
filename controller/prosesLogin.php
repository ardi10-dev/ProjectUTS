<?php 
include '../model/databaseLogin.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi=="login"){
    $username=$_POST['username'];
    if($username=="admin"){
        header("location:../view/examples/dashboard.php");
    }else{
        $db->input($_POST['username'],$_POST['password']);
        header("location:../view/homeuser.php");
    }
}
?>