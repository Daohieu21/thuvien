<?php
include 'config.php';
$sql= "SELECT * FROM blsanpham";
$queryc=mysqli_query($conn,$sql);

$sqlTv= "SELECT * FROM thanhvien";
$queryTv=mysqli_query($conn,$sqlTv);

$sqlSp= "SELECT * FROM sanpham";
$querySp=mysqli_query($conn,$sqlSp);
?>

<h3>Trang chủ quản trị</h3>
<div class="tong_quan">
    <li><a href="index.php?page_layout=danhsachsp"><?php echo "Sản phẩm: ".mysqli_num_rows($querySp); ?></a></li>
    <li><a href="index.php?page_layout=danhsachbl"><?php echo "Bình luận: ".mysqli_num_rows($queryc); ?></a></li>
    <li><a href="index.php?page_layout=danhsachtv"><?php echo "Thành viên: ".mysqli_num_rows($queryTv); ?></a></li>
</div>
<div class="main-content">
    <h5>Giới thiệu</h5>
<br>
<p>Chào mừng bạn đến với trang quản trị của hệ thống thư viện</p>
<p>Hệ thống quản trị này gồm các chức năng:</p>
<p> - Quản lí thành viên</p>
<p> - Quản lí danh mục</p>
<p> - Quản lí sản phẩm</p>
<p> - Quản lí bình luận</p>
</div>