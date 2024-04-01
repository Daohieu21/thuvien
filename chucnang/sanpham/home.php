<?php
$sql="SELECT * FROM sanpham WHERE dac_biet='1' ORDER BY id_sp DESC LIMIT 5";
$query=mysqli_query($conn,$sql);

$sql1="SELECT * FROM sanpham ORDER BY id_sp DESC LIMIT 10";
$query1=mysqli_query($conn,$sql1);

$sql2="SELECT * FROM sanpham WHERE id_dm=1 ORDER BY id_sp DESC LIMIT 5";
$query2=mysqli_query($conn,$sql2);
?> 
<?php
 include_once 'chucnang/slideshow/slideshow.php';
?>
<!----------------products start ----------------->
<div id="wrapper">
    <div class="headline">
        <p>Tác Phẩm Đặc Biệt</p>
    </div>
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

<div id="wrapper">
    <div class="headline">
        <p>Tác phẩm mới</p>
    </div>
    <ul class="products">
        <?php
        while($row1=mysqli_fetch_array($query1)){
        ?>
        <li>
            <div class="product-items">
                <div class="product-top">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row1['id_sp']; ?>" class="product-thumb">
                        <img src="quan_tri/anh/<?php echo $row1['anh_sp']; ?>" alt="">
                    </a>
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row1['id_sp']; ?>" class="buy-now">Đọc ngay</a>
                </div>
                <div class="product-info">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row1['ten_sp']; ?></a>
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

<div id="wrapper">
    <div class="headline">
        <p>Văn Học Nghệ Thuật</p>
    </div>
    <ul class="products">
        <?php
        while($row2=mysqli_fetch_array($query2)){
        ?>
        <li>
            <div class="product-items">
                <div class="product-top">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row2['id_sp']; ?>" class="product-thumb">
                        <img src="quan_tri/anh/<?php echo $row2['anh_sp']; ?>" alt="">
                    </a>
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row2['id_sp']; ?>" class="buy-now">Đọc ngay</a>
                </div>
                <div class="product-info">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row2['ten_sp']; ?></a>
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
<!---------------products end ----------------->
<div class="banner-footer">
        <img src="images/anhanh.jpg" alt="">
</div>