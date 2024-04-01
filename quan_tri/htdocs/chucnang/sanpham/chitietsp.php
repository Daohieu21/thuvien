<?php
$id_sp=$_GET['id_sp'];
$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
<link rel="stylesheet" href="css/chitietsp.css"> 
        <!------------Cường-chi tiết sản phẩm--------------->
        <div class="wrapper">
            <div class="product-home">
                <div class="product-top-content">
                    <i class="fa fa-home" id="home"></i><a href="index.php">Trang chủ</a>
                    <i class="fa fa-chevron-right" id="chevron"></i><a href="#"><?php echo $row['ten_sp']; ?></a>
                </div>
            </div>
            <div class="products">
                <div class="product-content">
                    <div class="content-left">
                        <div class="product-big-img">
                            <img src="quan_tri/anh/<?php echo $row['anh_sp']; ?>" alt="">
                        </div>
                        <div class="product-small-img">
                            <li><img src="quan_tri/anh/<?php echo $row['anh_sp']; ?>" alt=""></li>
                            <li><img src="images/5DS-Body-2.png" alt=""></li>
                            <li><img src="images/5DS-04-2.png" alt=""></li>
                            <li><img src="images/5DS-Body-1.png" alt=""></li>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="product-name">
                            <h1><?php echo $row['ten_sp']; ?></h1>
                        </div>
                        <div class="product-price">
                            <p><?php echo $row['gia_sp']; ?></p>
                        </div>
                        <div class="baohanh">
                            <h6>Bảo hành: <?php echo $row['bao_hanh']; ?></h6>
                        </div>
                        <div class="phukien">
                            <h6>Đi kèm: <?php echo $row['phu_kien']; ?></h6>
                        <div class="tinhtrang">
                            <h6>Tình trạng: <?php echo $row['tinh_trang']; ?></h6>
                        </div>
                        <div class="so-luong">
                            <p style="font-weight: bold;">Số lượng:</p>
                            <input type="number" min="0" value="1">
                        </div>
                        <div class="other">
                            <p><?php echo $row['trang_thai']; ?></p>
                        </div>
                        <div class="product-buttom">
                            <a href=""><button class="btn btn-danger">Thêm vào giỏ</button></a>
                            <a href=""><button class="btn btn-primary">Mua ngay</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="wrapper-content">
                <div class="tabs">
                    <ul class="nav-tab">
                        <li class="active"><a href="#menu_1">Tính năng</a></li>
                        <li><a href="#menu_2">Bình luận sản phẩm</a></li>
                        <li><a href="#menu_3">Hỗ trợ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu_1" class="tab-content-item">
                          <?php echo $row['chi_tiet_sp']; ?>
                        </div>
                        <?php
                        if(isset($_POST['insert'])){
                            $ten=$_POST['ten'];
                            $dien_thoai=$_POST['dien_thoai'];
                            $binh_luan=$_POST['binh_luan'];
                            
                            $ngay_gio=date("Y-m-d H:i:s");
                            if(isset($ten) && isset($dien_thoai) && isset($binh_luan)){
                                $sqlBl="INSERT INTO blsanpham(ten,dien_thoai,binh_luan,ngay_gio,id_sp) VALUES('".$ten."',"."'".$dien_thoai."','".$binh_luan."','".$ngay_gio."', '".$id_sp."')";
                                $query= mysqli_query($conn,$sqlBl);
                                header('location: index.php?page_layout=chitietsp&id_sp='.$id_sp);
                            }
                        }
                        ?>
                        <div id="menu_2" class="tab-content-item">
                            <form method="post" action="index.php?page_layout=chitietsp&id_sp=<?php echo $id_sp; ?>">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="ten" required="" placeholder="Nhập tên">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input type="text" name="dien_thoai" required="" placeholder="Nhập số điện thoại">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Bình luận</label>
                                    <textarea class="form-control" name="binh_luan" required="" placeholder="nhập bình luận"></textarea>
                                </div>
                                <br>
                                <button type="submit" name="insert" class="btn btn-primary">Bình luận</button>
                            </form>
                            <br>
                            <?php
                            $sqlBl="SELECT * FROM blsanpham WHERE id_sp=$id_sp ORDER BY id_bl ASC";
                            $queryBl=mysqli_query($conn,$sqlBl);
                            $totalBl=mysqli_num_rows($queryBl);
                            if($totalBl>0){
                            ?>
                            <div style="border-top: 1px solid gainsboro;" class="binhluan">
                                <?php
                                while($rowBl=mysqli_fetch_array($queryBl)){
                                ?>
                                <ul>
                                    <li style="font-weight:bold;padding-top:10px;"><?php echo $rowBl['ten']; ?></li>
                                    <li style="font-size: 10px;"><?php echo $rowBl['ngay_gio']; ?></li>
                                    <li style="font-size: 15px;">
                                        <p><?php echo $rowBl['binh_luan']; ?></p>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div id="menu_3" class="tab-content-item">
                            <p>Nội dung đang cập nhật</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------js product--------------->
        <script>
            const bigImg = document.querySelector(".product-big-img img")
            const smallImg = document.querySelectorAll(".product-small-img img")
            smallImg.forEach(function(imgItem,X){
                imgItem.addEventListener("click",function(){
                    bigImg.src = imgItem.src
                })
            })
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                $('.tab-content-item').hide();
                $('.tab-content-item:first-child').fadeIn();
                $('.nav-tab li').click(function(){
                    $('.nav-tab li').removeClass('active');
                    $(this).addClass('active');

                    let id_tab_content = $(this).children('a').attr('href');
                    $('.tab-content-item').hide();
                    $(id_tab_content).fadeIn();
                    return false;
                });
            });
        </script>