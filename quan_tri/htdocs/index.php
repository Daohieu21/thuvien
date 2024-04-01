<?php
require 'cauhinh/config.php';
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DHC-Cửa hàng máy ảnh số 1 Việt Nam</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="images/logobanner.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS content -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!--------------- CƯỜNG-Header start ----------------->
		<header>
            <div class="header-content">
                <div class="logo">
                    <a href="index.php"><img src="images/logobanner.png" height="70px" alt=""></a>
                </div>
                <?php
                include_once 'chucnang/sanpham/danhmucsp.php';
                ?>
                <div class="other">
                    <?php
                    include_once 'chucnang//timkiem/timkiem.php';
                    ?>
                    <?php
                    include_once 'chucnang/giohang/giohangcuaban.php';
                    ?>
                    <li><a href="login.php"><i class="fa fa-user-circle"></i></a></li>
                </div>
            </div>
        </header>
            <!--------------- Header-js ----------------->
        <script>
            const header = document.querySelector("header")
            window.addEventListener("scroll",function(){
                x=window.pageYOffset
                if(x>0){
                    header.classList.add("sticky")
                }
                else{
                    header.classList.remove("sticky")
                }
            })
        </script>
        <!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                alert("Chào mừng thầy đến với trang web của nhóm chúng em!");
            })
        </script>-->
        <!--------------- CƯỜNG-Header end ----------------->
        
        
        <!--------------- master-page ----------------->
        <?php
            if(isset($_GET["page_layout"])){
                switch ($_GET["page_layout"]) {
                    case 'giohang':include_once 'chucnang/giohang/giohang.php';
                        break;
                    case 'giohangcuaban':include_once 'chucnang/giohang/giohangcuaban.php';
                        break;
                    case 'sanpham':include_once 'chucnang/sanpham/sanpham.php';
                        break;
                    case 'chitietsp':include_once 'chucnang/sanpham/chitietsp.php';
                        break;
                    case 'danhsachtimkiem':include_once 'chucnang/timkiem/danhsachtimkiem.php';
                        break;
                }
            }
            else{
                include_once 'chucnang/sanpham/home.php';
            }
        ?>


        <!--------------- DƯƠNG-Footer start ----------------->
        <div id="footer">
            <ul class="footer-top">
                <li>
                    <div class="place">
                        <a style="font-weight: bold;font-size: 15px;">Tìm cửa hàng</a>
                        <br>
                        <a href="">Mua hàng gần nhất</a>
                        <br>
                        <a href="">Mua hàng từ xa</a>
                        <br>
                        <a>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.017336361273!2d105.77172461517605!3d21.071969791677198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4buPIC0gxJDhu4thIGNo4bqldA!5e0!3m2!1svi!2s!4v1632542079233!5m2!1svi!2s" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="tt">
                        <a style="font-size: 15px;font-weight: bold;">Phương thức thanh toán</a>
                        <br>
                        <a href="">
                            <img src="images/pttt.png" alt="">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="introduce">
                        <div style="font-size: 15px;font-weight: bold;">Cửa hàng</div>
                        <a href="#">Giới thiệu</a>
                        <br>
                        <a href="#">Chính sách bảo hành</a>
                        <br>
                        <a href="#">Chính sách bảo mật</a>
                        <br>
                        <a href="#">Chi nhánh - Đại lý</a>
                    </div>
                </li>
                <li>
                    <div class="call">
                        <a href="#">Gọi mua hàng: 1800.2097 (8h00 - 22h00)</a>
                        <br>
                        <a href="#">Gọi khiếu nại: 1800.2063 (8h00 - 21h30)</a>
                        <br>
                        <a href="#">Gọi bảo hành: 1800.2064 (8h00 - 21h00)</a>
                    </div>
                </li>
            </ul>
            <div class="fuild-container" style="background: rgb(255, 223, 135);padding-top: 10px; padding-bottom: 5px;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p style="text-align: center;font-size: 12px; color: black;">
                        2018 © Electronic Mart. All rights reserved. Developed by DHC company
                        <br>
                        GPDKKD số 0310697334, cấp ngày 17/03/2011 tại Sở kế hoạch và Đầu tư TP.Hà Nội
                        <br>
                        info@DHC.com
                        <br>
                        Số 18 Phố Viên, Đức Thắng, Bắc Từ Liêm
                        <br>
                        Hà Nội, Việt Nam, 100000
                        <br>
                        028.6297.0133 - 028.6297.0130
                    </p>
                </div>
            </div>
        </div>
        <!--------------- DƯƠNG-Footer end ----------------->



        <!--------------- logo cố định ----------------->
        <div class="logo_call">
            <li><a href="https://facebook.com" class="button" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="button"><i class="fa fa-phone"></i></a></li>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>