<script>
    function xoaSanPham(){
        var conf=confirm("Bạn có chắc chắn muốn xoá không?");
        return conf;
    }
</script>
<?php
require "config.php";
$sql="SELECT * FROM sanpham inner join dmsanpham on sanpham.id_dm=dmsanpham.id_dm ORDER BY id_sp DESC";
$query=mysqli_query($conn,$sql);

?>

<link rel="stylesheet" href="css/danhsachsp.css">
<h3>Danh sách sản phẩm</h3>
<div class="new_sp">
  <li><a href="index.php?page_layout=themmoisp">Thêm sản phẩm mới</a></li>
  <form action="" style="padding-left:10px; width:50%;">
    <input type="text" name="stext" class="form-control" name="txt_search" placeholder="Tìm kiếm">
  </form>
</div>
<div class="table_sp">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Ảnh mô tả</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row = mysqli_fetch_array($query)){
      ?>
      <tr>
        <th><?php echo $row['id_sp']; ?></th>
        <td><?php echo $row['ten_sp']; ?></td>
        <td><?php echo $row['gia_sp']; ?></td>
        <td><?php echo $row['ten_dm']; ?></td>
        <td>
          <span class="thumb"><img width="150px" src="anh/<?php echo $row['anh_sp']; ?>"></span>
        </td>
        <td><a href="index.php?page_layout=suasp&id_sp=<?php echo $row['id_sp']; ?>"><i class="fa fa-edit"></i></a></td>
        <td><a onclick="return xoaSanPham();" href="index.php?page_layout=xoasp&id_sp=<?php echo $row['id_sp']; ?>"><i class="fa fa-times" style="color:red;"></i></a></td>
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