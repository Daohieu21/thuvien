<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xoá không?");
        return conf;
    }
</script>
<?php
require "config.php";
$sql="SELECT * FROM dmsanpham ORDER BY id_dm DESC";
$query=mysqli_query($conn,$sql);
?>

<link rel="stylesheet" href="css/danhsachdm.css">
<h3>Danh sách danh mục</h3>
<div class="new_dm">
    <li><a href="index.php?page_layout=themmoidm">Thêm danh mục mới</a></li>
</div>
<div class="table_dm">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $row['id_dm']; ?></th>
                <td><?php echo $row['ten_dm']; ?></td>
                <td><a href="index.php?page_layout=suadm&id_dm=<?php echo $row['id_dm']; ?>"><i class="fa fa-edit"></i></a></td>
                <td><a onclick="return xoaDanhMuc();" href="xoadm.php?id_dm=<?php echo $row['id_dm']; ?>"><i class="fa fa-times" style="color:red;"></i></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>  
</div>
