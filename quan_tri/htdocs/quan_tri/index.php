<?php
ob_start();
session_start();
require "config.php";
if($_SESSION["email"]=="cuongnguyen@gmail.com"&&$_SESSION["mk"]=="Cuongnguyen01"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản trị</title>
    <link rel="stylesheet" href="css/quantri.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <li><a href="index.php"><img src="anh/logobanner.png" height="40px" alt=""></a></li>
            <li><a href=""><i class="fa fa-hand-peace-o"></i>Xin chào, <?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?></a></li>
        </div>
        <div id="wp-content">
            <div class="sidebar">
                <h3>Danh mục</h3>
                <li><a href="index.php"><i class="fa fa-home"></i>Trang chủ quản trị</a></li>
                <li><a href=""><i class="fa fa-users"></i>Quản lí thành viên</a></li>
                <li><a href="index.php?page_layout=danhsachdm"><i class="fa fa-list-ul"></i>Quản lí danh mục</a></li>
                <li><a href="index.php?page_layout=danhsachsp"><i class="fa fa-camera"></i>Quản lí sản phẩm</a></li>
                <li><a href="index.php?page_layout=danhsachbl"><i class="fa fa-window-maximize"></i>Quản lí bình luận</a></li>
                <li><a href="dangxuat.php"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
            </div>
            <div class="content">
                <?php
                if(isset($_GET["page_layout"])){
                    switch ($_GET["page_layout"]) {
                        case 'danhsachsp':include_once './danhsachsp.php';
                            break;
                        case 'danhsachdm':include_once './danhsachdm.php';
                            break;
                        case 'danhsachbl':include_once './danhsachbl.php';
                            break;
                        case 'themmoidm':include_once './themmoidm.php';
                            break;
                        case 'suadm':include_once './suadm.php';
                            break;
                        case 'xoadm':include_once './xoadm.php';
                            break;
                        case 'themmoisp':include_once './themmoisp.php';
                            break;
                        case 'suasp':include_once './suasp.php';
                            break;
                        case 'xoasp':include_once './xoasp.php';
                            break;
                    }
                }
                else{
                    include_once './gioithieu.php';
                }
                ?>
            </div>
        </div>
        <div id="footer">
            <p>Được tài trợ và lập trình bởi dhc camera</p>
        </div>
    </div>
</body>
</html>
<?php
}else{
    header('location:login.php');
}
?>