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
                <img src="images/banner-danhmucsp.png" style="width: 100%" alt="">
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

        <div class="contents" style="padding-bottom: 20px;">
            <div id="wrapper" style="border: 1px solid gray;padding: 20px; border-radius: 10px;">
                <div class="content">
                    <p id="text1">
                        Ngay từ những ngày đầu xuất hiện, với hình dạng cồng kềnh và rất rườm rà nhưng máy ảnh đã phần nào khẳng định được sứ mệnh của mình. Thời gian có thể qua đi nhưng hình ảnh thì luôn còn mãi. Bằng chứng là những gì chúng ta thấy được ngày nay về đời sống và con người cách nay gần 200 năm, vào đầu thế kỷ 19. Đó là những tài liệu vô cùng quý giá phản ánh trung thực nhất về lịch sử.
                        <br>
                        <img src="images/anh-content.jpeg" style="width: 100%;align-items: center;padding: 10px 200px;" alt="">
                        Dần dần theo thời gian, với sự phát triển khoa học kỹ thuật của nhân loại, máy ảnh đã trở nên nhỏ gọn, dễ sự dụng và thông dụng hơn. Vai trò của máy ảnh cũng được mở rộng ra, không chỉ đơn thuần là để lưu giữ hình ảnh mà đã được nâng lên tầm của một ngành nghệ thuật, trở thành niềm đam mê của rất nhiều người. Với họ, chụp ảnh là để thể hiện góc nhìn, cá tính của bản thân và trên hết là để tạo ra những bức ảnh đẹp mang đầy tính nghệ thuật để lại cho đời.
                    </p>
                </div>
                <p>Ngày nay, khi chất lượng cuộc sống ngày được cải thiện thì người ta quan tâm nhiều đến giá trị tinh thần hơn. Vì vậy những khoảnh khắc vui tươi hạnh phúc bên gia đình, người thân, bạn bè luôn chúng ta luôn mong muốn giữ lại. Bên cạnh đó, sự phát triển của Internet thì các mạng xã hội như Facebook, Twitter, Instagram là nơi để mọi người trao đổi chia sẻ những suy nghĩ cũng như những điều họ thấy trong cuộc sống và hình ảnh trở thành một công cụ vô cùng đắc lực, hỗ trợ xuất sắc cho những hoạt động đó. Những điều trên làm cho máy ảnh dần trở thành một thiết bị quan trọng trong cuộc sống ngày nay. các bạn trẻ quan tâm tìm hiểu nhiều hơn về máy ảnh và nghệ thuật nhiếp ảnh. Họ xem đó là một cách hiểu quả để thể hiện góc nhìn riêng của bản thân với những sự kiện, hình ảnh hàng ngày diễn ra trước mắt. Chụp ảnh không còn đơn giản là cầm máy lên và bấm nút chụp, họ đòi hỏi nhiều hơn ở bức ảnh được chụp, nó phải thật sự đẹp. Đôi khi, chụp ảnh được xem là một cách hiệu quả để thể hiện góc nhìn riêng của bản thân với những sự kiện, hình ảnh hàng ngày diễn ra trước mắt.
                    <br>
                    <img src="images/anh-content2.jpeg" style="width: 100%;align-items: center;padding: 10px 200px;" alt="">
                    Thật không thể phủ định vai trò của máy ảnh, chúng ta có thể thấy rằng máy ảnh là công cụ quan trọng không chỉ giúp ta lưu giữ những khoảnh khắc sẽ trôi qua mà còn là một phương tiện giúp ta thể hiện cá tính riêng, thể hiện cái nhìn về thế giới xung quanh. Bạn đã có cho riêng mình một chiếc máy ảnh chưa? Nếu chưa thì hãy trang bị cho mình một chiếc máy ảnh để những thi vị của cuộc sống này được lưu giữ một cách trọn vẹn nhé!
                    </p>
            </div>
        </div>