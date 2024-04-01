<?php
ob_start();
session_start();
require "config.php";
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $mk = $_POST["mk"];
    if(isset($email)&&isset($mk)){
        $sql = "SELECT * FROM thanhvien WHERE email ='$email' AND mat_khau='$mk'"; 
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($query);
        if($rows>0){
            $_SESSION["email"] = $email;
            $_SESSION["mk"] = $mk;
            header('location: index.php');
        }
        else{
            echo '<center class="alert alert-danger" role="alert">Tài khoản không tồn tại hoặc bạn không có quyền truy cập';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>DHC CAMERA - Đăng nhập hệ thống</title>
	<link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form method="post">
	<div id="form-login">
		<h2>đăng nhập hệ thống quản trị</h2>
	    <ul>
	        <li><label>tài khoản</label><input type="text" name="email" /></li>
	        <li><label>mật khẩu</label><input type="password" name="mk" /></li>
	        <li><label>ghi nhớ</label><input type="checkbox" name="check" checked="checked" /></li>
	        <li><input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary"/> <input type="reset" name="resset" value="Làm mới" class="btn btn-success"/></li>
	    </ul>
	</div>
	</form>
</body>
</html>