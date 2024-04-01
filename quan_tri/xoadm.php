<?php
session_start();
if($_SESSION['email']=="thuvien@gmail.com" && $_SESSION["mk"]=="thuvien"){
    $id_dm=$_GET["id_dm"];
    require 'config.php';
    $sql = "DELETE FROM dmsanpham WHERE id_dm='".$id_dm."'";
    $query=mysqli_query($conn,$sql);
    header('location:index.php?page_layout=danhsachdm');
}
else{
    header('location: login.php');
}
?>