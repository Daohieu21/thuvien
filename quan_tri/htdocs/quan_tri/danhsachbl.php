<?php
$sql="SELECT * FROM blsanpham ORDER BY id_bl DESC";
$query=mysqli_query($conn,$sql);
?>

<link rel="stylesheet" href="css/danhsachdm.css">
<h3>Danh sách bình luận</h3>
<div class="table_dm">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Người bình luận</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Thời gian</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $row['id_bl']; ?></th>
                <td><?php echo $row['id_sp']; ?></td>
                <td><?php echo $row['ten']; ?></td>
                <td><?php echo $row['dien_thoai']; ?></td>
                <td><?php echo $row['binh_luan']; ?></td>
                <td><?php echo $row['ngay_gio']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>  
</div>
