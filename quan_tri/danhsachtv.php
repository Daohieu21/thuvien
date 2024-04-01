<script>
    function xoaThanhVien(){
        var conf=confirm("Bạn có chắc chắn muốn xoá không?");
        return conf;
    }
</script>
<?php
require "config.php";
$sql="SELECT * FROM thanhvien ORDER BY id_tv DESC";
$query=mysqli_query($conn,$sql);
?>

<link rel="stylesheet" href="css/danhsachsp.css">
<h3>Danh sách thành viên</h3>
<div class="new_sp">
  <li><a href="index.php?page_layout=themmoitv">Thêm thành viên mới</a></li>
  
</div>
<div class="table_sp">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên thành viên</th>
        <th scope="col">Ảnh đại diện</th>
        <th scope="col">Ngày mượn</th>
        <th scope="col">Ngày trả</th>
        <th scope="col">Danh sách tài liệu</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row = mysqli_fetch_array($query)){
      ?>
      <tr>
        <th><?php echo $row['id_tv']; ?></th>
        <td><?php echo $row['ten_tv']; ?></td>
        <td>
          <span class="thumb"><img width="150px" src="anh/<?php echo $row['anh_tv']; ?>"></span>
        </td>
        <td><?php echo $row['ngay_muon']; ?></td>
        <td><?php echo $row['ngay_tra']; ?></td>
        <td><?php echo $row['chi_tiet']; ?></td>
        
        <td><a href="index.php?page_layout=suatv&id_tv=<?php echo $row['id_tv']; ?>"><i class="fa fa-edit"></i></a></td>
        <td><a onclick="return xoaThanhVien();" href="index.php?page_layout=xoatv&id_tv=<?php echo $row['id_tv']; ?>"><i class="fa fa-times" style="color:red;"></i></a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<ul class="pagination" style="float:right;">
  <li><a href=""><<<</a></li>
  <li><a href="">1</a></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">>>></a></li>
</ul>