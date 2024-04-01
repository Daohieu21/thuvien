<?php
$id_tv=$_GET['id_tv'];

$sql="SELECT * FROM thanhvien";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);


if(isset($_POST['insert'])){
    $ten_tv=$_POST["ten_tv"];
    $nam_sinh=$_POST["nam_sinh"];
    $que_quan=$_POST["que_quan"];
    $sdt=$_POST["sdt"];
    $chi_tiet=$_POST["chi_tiet"];
    $ngay_muon=$_POST["ngay_muon"];
    $ngay_tra=$_POST["ngay_tra"];

    if($_FILES['anh_tv']['name']==""){
        $anh_tv=$_POST['anh_tv'];
    }
    else{
        $anh_tv=$_FILES['anh_tv']['name'];
        $tmp_name=$_FILES['anh_tv']['name'];
    }

    if(isset($ten_tv) && isset($nam_sinh) && isset($que_quan) && isset($sdt) && isset($chi_tiet)&& isset($ngay_muon)&& isset($ngay_tra)){
        move_uploaded_file($tmp_name,"anh/".$anh_tv);
        $sql="UPDATE quantrithanhvien SET ten_tv='".$ten_tv."', nam_sinh='".$nam_sinh."', que_quan='".$que_quan."', sdt='".$sdt."', chi_tiet_tv='".$chi_tiet."',ngay_muon='".$ngay_muon."',ngay_tra='".$ngay_tra."', anh_tv='".$anh_tv."' WHERE id_tv=$id_tv";
        $query=mysqli_query($conn,$sql);
        header('location: index.php?page_layout=danhsachtv');
    }

}

?>


<link rel="stylesheet" href="css/themmoisp.css">
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<h3>Sửa thông tin thành viên</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        <table class="table">
        <tbody>
            <tr>
                <td>
                    Tên thành viên
                    <input type="text" class="form-control" name="ten_tv" required="" value="<?php echo $row["ten_tv"]; ?>">
                    Năm sinh
                    <input type="date" class="form-control" name="nam_sinh" required="" value="<?php echo $row["nam_sinh"]; ?>">
                    Quê quán
                    <input type="text" class="form-control" name="que_quan" value="<?php echo $row["que_quan"]; ?>">
                    <br>
                    Ảnh đại diện
                    <input type="file" name="anh_tv"><input type="hidden" name="anh_tv" value="<?php echo $row["anh_tv"]; ?>"/>
                </td>
                <td>
                    Số điện thoại
                    <input type="text" class="form-control" name="sdt" value="<?php echo $row["sdt"]; ?>">
                    Ngày mượn
                    <input type="date" class="form-control" name="ngay_muon" value="<?php echo $row["ngay_muon"]; ?>">
                    Ngày trả
                    <input type="date" class="form-control" name="ngay_tra" value="<?php echo $row["ngay_tra"]; ?>">
                </td>
            </tr>

        </tbody>
        </table>
        Danh sách tài liệu
        <textarea name="chi_tiet"><?php if(isset($_POST['chi_tiet'])){echo $_POST['chi_tiet'];} else{echo $row["chi_tiet"];} ?></textarea>
        <script>
                CKEDITOR.replace( 'chi_tiet');
        </script>
        <br>
        <input type="submit" name="insert" value="Sửa" class="btn btn-primary">
    </form>
</div> 