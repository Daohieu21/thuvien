<?php

$id_dm=$_GET["id_dm"];
$sql="SELECT * FROM dmsanpham WHERE id_dm=$id_dm";
$query=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($query);
if(isset($_POST["insert"])){
    $ten_dm=$_POST["ten_dm"];
    if(isset($ten_dm)){
        $sql="UPDATE dmsanpham SET ten_dm='".$ten_dm."' WHERE id_dm=$id_dm";
        $query=mysqli_query($conn, $sql);
        header('location:index.php?page_layout=danhsachdm');
    }
}
?>
<link rel="stylesheet" href="css/themmoisp.css">

<h3>Sửa danh mục</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        Tên danh mục
        <input type="text" class="form-control" name="ten_dm" value="<?php echo $row["ten_dm"]; ?>">
        <br>
        <input type="submit" name="insert" value="Sửa" class="btn btn-primary">
    </form>
</div> 