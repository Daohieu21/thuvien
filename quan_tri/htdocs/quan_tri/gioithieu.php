<?php
$sql= "SELECT COUNT(*) FROM blsanpham";
$query=mysqli_query($conn,$sql);

$sqlTv= "SELECT COUNT(*) FROM thanhvien";
$queryTv=mysqli_query($conn,$sqlTv);
?>

<h3>Trang chủ quản trị</h3>
<div class="tong_quan">
    <li><a href="">Đơn hàng</a></li>
    <li><a href="index.php?page_layout=danhsachbl"><?php echo "Bình luận: ".mysqli_num_rows($query); ?></a></li>
    <li><a href=""><?php echo "Thành viên: ".mysqli_num_rows($queryTv); ?></a></li>
</div>
<div class="main-content">
    <h5>Giới thiệu</h5>
<br>
<p>Chào mừng bạn đến với trang quản trị của hệ thống DHC camera</p>
<p>Trang web DHC Camera được thành lập vào tháng 10/2021, hoạt động trong lĩnh vực bán các thiết bị máy ảnh kĩ thuật số có trụ sở chính tại Hà Nội</p>
<p> - Cơ sở: Số 18 phố Viên, Đức Thắng, Hà Nội</p>
<p>Hệ thống quản trị này gồm các chức năng:</p>
<p> - Quản lí thành viên</p>
<p> - Quản lí danh mục</p>
<p> - Quản lí sản phẩm</p>
<p> - Quản lí bình luận</p>
<br>
<p>Hệ thống đang trong quá trình hoàn thiện bới các chuyên gia và học viên của DHC Camera. Hệ thống vẫn tiếp tục được nâng cấp và cải tiến bởi các bạn học viên, các khóa học sau được sử dụng những chức năng tốt nhất của hệ thống.</p>
</div>