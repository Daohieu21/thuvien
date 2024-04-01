<?php
session_start();
if($_SESSION['email']=="cuongnguyen@gmail.com" && $_SESSION["mk"]=="Cuongnguyen01"){
    $id_sp=$_GET["id_sp"];
    require 'config.php';
    $sql = "DELETE FROM sanpham WHERE id_sp='".$id_sp."'";
    $query=mysqli_query($conn,$sql);
    header('location:index.php?page_layout=danhsachsp');
}
else{
    header('location: login.php');
}
?>