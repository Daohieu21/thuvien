<?php

if(isset($_POST["insert"])){
    $ten_tv=$_POST["ten_tv"];
    $nam_sinh=$_POST["nam_sinh"];
    $que_quan=$_POST["que_quan"];
    $sdt=$_POST["sdt"];
    $chi_tiet=$_POST["chi_tiet"];
    $ngay_muon=$_POST["ngay_muon"];
    $ngay_tra=$_POST["ngay_tra"];
    

    if($_FILES['anh_tv']['name']==''){
        $error_anh_tv='<span>(*)</span>';
    }
    else{
        $anh_tv=$_FILES['anh_tv']['name'];
        $tmp_name=$_FILES['anh_tv']['tmp_name']; 
    }
    
    

    if(isset($ten_tv) && isset($nam_sinh) && isset($que_quan)  && isset($sdt)&& isset($chi_tiet) && isset($ngay_muon)&& isset($ngay_tra) && isset($anh_tv)){
        move_uploaded_file($tmp_name,'anh/'.$anh_tv);
        $sql="INSERT INTO thanhvien(ten_tv,nam_sinh,que_quan,sdt,chi_tiet,ngay_muon,ngay_tra,anh_tv) 
        VALUES('".$ten_tv."','".$nam_sinh."','".$que_quan."','".$sdt."','".$chi_tiet."','".$ngay_muon."','".$ngay_tra."','".$anh_tv."')";
        $query=mysqli_query($conn,$sql);
        header('location:index.php?page_layout=danhsachtv');
    }
}
?>


<link rel="stylesheet" href="css/themmoisp.css">
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<h3>Thêm mới thành viên</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        <table class="table">
        <tbody>
            <tr>
                <td>
                    Tên thành viên
                    <input type="text" class="form-control" name="ten_tv" required="">
                    Năm sinh
                    <input type="date" class="form-control" name="nam_sinh" required="">
                    Quê quán
                    <input type="text" class="form-control" name="que_quan" required="">
                    <br>
                    Ảnh đại diện
                    <input type="file" name="anh_tv">
                </td>
                <td>
                    Số điện thoại
                    <input type="text" class="form-control" name="sdt" required="">
                    Ngày mượn
                    <input type="date" class="form-control" name="ngay_muon" required="">
                    Ngày trả
                    <input type="date" class="form-control" name="ngay_tra" required="">  
                </td>
            </tr>

        </tbody>
        </table>
        Danh sách tài liệu
        <textarea name="chi_tiet"></textarea>
        <script>
                CKEDITOR.replace( 'chi_tiet');
        </script>
        <br>
        <div>
        <input type="submit" name="insert" value="Thêm mới" class="btn btn-primary">
        </div>
    </form>
</div> 

