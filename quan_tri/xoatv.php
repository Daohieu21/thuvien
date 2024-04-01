<?php
session_start();
if($_SESSION['email']=="thuvien@gmail.com" && $_SESSION["mk"]=="thuvien"){
    $id_tv=$_GET["id_tv"];
    require 'config.php';
    $sql = "DELETE FROM thanhvien WHERE id_tv='".$id_tv."'";
    $query=mysqli_query($conn,$sql);
    header('location:index.php?page_layout=danhsachtv');
}
else{
    header('location: login.php');
}
?>