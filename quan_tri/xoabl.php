<?php
session_start();
if($_SESSION['email']=="thuvien@gmail.com" && $_SESSION["mk"]=="thuvien"){
    $id_bl=$_GET["id_bl"];
    require 'config.php';
    $sql = "DELETE FROM blsanpham WHERE id_bl='".$id_bl."'";
    $query=mysqli_query($conn,$sql);
    header('location:index.php?page_layout=danhsachbl');
}
else{
    header('location: login.php');
}
?>