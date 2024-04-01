<?php
$sql="SELECT * FROM dmsanpham";
$query=mysqli_query($conn,$sql);
?>   

<div class="menu">
    <li><a href="index.php">Trang Chủ</a></li>
    <?php
    while($row=mysqli_fetch_array($query)){
    ?>
    <li><a href="index.php?page_layout=sanpham&id_dm=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm']; ?></a></li>
    <?php
    }
    ?>
</div>