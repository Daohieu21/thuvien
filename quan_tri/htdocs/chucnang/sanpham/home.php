<?php
$sql="SELECT * FROM sanpham WHERE dac_biet='1' ORDER BY id_sp DESC LIMIT 5";
$query=mysqli_query($conn,$sql);

$sql1="SELECT * FROM sanpham ORDER BY id_sp DESC LIMIT 10";
$query1=mysqli_query($conn,$sql1);

$sql2="SELECT * FROM sanpham WHERE id_dm=7 ORDER BY id_sp DESC LIMIT 5";
$query2=mysqli_query($conn,$sql2);
?> 

<section>
    <img src="images/gif.jpg" style="width: 100%" alt="">
</section>
<!--------------- ĐẠI-LIBRARY,SLIDE start ----------------->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="js/slider.js"></script>
<div id="container">
    <h2>DHC CAMERA</h2>
    <div class="customer-logos slider">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                <div class="wap-items-ss brbox">
                    <div class="wap-ss-img1">
                        <img alt="" src="images/1506480127_qc-1.png">
                    </div>
                    </div>
                </div>
                </div>
        

            <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="wap-items-ss brbox">
                <div class="wap-ss-img2">
                    <img alt="" src="images/1506480307_qc2.png">
                </div>                                                                   
            </div>
            </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="wap-items-ss brbox">
                    <div class="wap-ss-img3">
                        <img alt="" src="images/1506480630_qc3.png">
                    </div>
                </div>
                    </div>
                </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                    <div class="wap-items-ss brbox">
                        <div class="wap-ss-img4">
                            <img alt="" src="images/1506480672_qc4.png">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/library.js"></script>

<?php
include_once 'chucnang/slideshow/slideshow.php';
?>
<!--------------- ĐẠI-CONTENT,SLIDE end ----------------->



<!--------------- HIẾU-products start ----------------->
<div id="wrapper">
    <div class="headline">
        <p>Sản phẩm đặc biệt</p>
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
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="buy-now">Mua ngay</a>
                </div>
                <div class="product-info">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row['ten_sp']; ?></a>
                    <div class="product-price"><?php echo $row['gia_sp']; ?></div>
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
        <p>Sản Phẩm Mới</p>
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
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row1['id_sp']; ?>" class="buy-now">Mua ngay</a>
                </div>
                <div class="product-info">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row1['ten_sp']; ?></a>
                    <div class="product-price"><?php echo $row1['gia_sp']; ?></div>
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

    <div class="headline">
        <p>Phụ kiện chính hãng</p>
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
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row2['id_sp']; ?>" class="buy-now">Mua ngay</a>
                </div>
                <div class="product-info">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp']; ?>" class="product-name"><?php echo $row2['ten_sp']; ?></a>
                    <div class="product-price"><?php echo $row2['gia_sp']; ?></div>
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
<!--------------- HIẾU-products end ----------------->
<div class="banner-footer">
        <img src="images/banner-footer.jpeg" alt="">
</div>