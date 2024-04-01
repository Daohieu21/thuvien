<?php
$id_dm=$_GET['id_dm'];
$sqlDm="SELECT * FROM dmsanpham WHERE id_dm=$id_dm";
$query=mysqli_query($conn,$sqlDm);
$rowDm=mysqli_fetch_array($query);


$sql="SELECT * FROM sanpham WHERE id_dm=$id_dm ORDER BY id_sp DESC";
$query=mysqli_query($conn,$sql);
?>   
<link rel="stylesheet" href="css/sanpham.css">
        <!--------------- Products ----------------->
        <div class="products-menu">
            <div id="wrapper">
                <div class="product-menu">
                    <i class="fa fa-home" id="home"></i><a href="index.php">Trang chủ</a>
                    <i class="fa fa-chevron-right" id="chevron"></i><a href="#"><?php echo $rowDm['ten_dm']; ?></a>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="content-banner" style="max-width: 1170px;margin: 0 auto;">
                <img src="images/anh3.jpg" style="width: 100%" alt="">
            </div>
        </div>
        <div id="wrapper">
            <ul class="products">
                <?php
                while($row=mysqli_fetch_array($query)){
                ?>
                <li>
                    <div class="product-items">
                        <div class="product-top">
                            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-thumb">
                                <img src="quan_tri/anh/<?php echo $row['anh_sp']; ?>" alt="">
                            </a>
                            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="buy-now">Đọc ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row['ten_sp']; ?></a>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="products-footer">
            <ul>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
            </ul>
        </div>