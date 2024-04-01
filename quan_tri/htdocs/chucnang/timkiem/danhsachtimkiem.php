<?php
//nhận từ khóa tìm kiếm
$stext=$_POST['stext'];

//loại bỏ khoảng trắng đầu và cuối
$stextNew=trim($stext);
$arr_stextNew= explode(' ',$stextNew);
$stextNew= implode('%',$arr_stextNew);
$stextNew='%'.$stextNew.'%';

$sql="SELECT * FROM sanpham WHERE ten_sp LIKE ('$stextNew') ORDER BY id_sp DESC";
$query=mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="css/style.css">
<div id="wrapper">
    <div class="headline">
        <p>Danh sách tìm kiếm với từ khóa "<?php echo $stext; ?>"</p>
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
                    <a href="" class="product-name"><?php echo $row['ten_sp']; ?></a>
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