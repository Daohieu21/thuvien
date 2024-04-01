<?php
require 'config.php';
if(isset($_POST["insert"])){
    $ten_dm=$_POST["ten_dm"];
    if(isset($ten_dm)){
        $sql = "INSERT INTO dmsanpham (ten_dm) VALUES ('".$ten_dm."')";
        $query = mysqli_query($conn, $sql);
        header ('location: index.php?page_layout=danhsachdm');
    }
}
?>
<link rel="stylesheet" href="css/themmoisp.css">

<h3>Thêm mới danh mục</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        Tên danh mục
        <input type="text" class="form-control" name="ten_dm" required="">
        <br>
        <input type="submit" name="insert" value="Thêm mới" class="btn btn-primary">
    </form>
</div> 

