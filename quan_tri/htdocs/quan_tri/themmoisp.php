<?php
$sqlDm="SELECT * FROM dmsanpham";
$queryDm=mysqli_query($conn,$sqlDm);

if(isset($_POST["insert"])){
    $ten_sp=$_POST["ten_sp"];
    $gia_sp=$_POST["gia_sp"];
    $bao_hanh=$_POST["bao_hanh"];
    $phu_kien=$_POST["phu_kien"];
    $tinh_trang=$_POST["tinh_trang"];
    $khuyen_mai=$_POST["khuyen_mai"];
    $trang_thai=$_POST["trang_thai"];
    $chi_tiet_sp=$_POST["chi_tiet_sp"];

    if($_FILES['anh_sp']['name']==''){
        $error_anh_sp='<span>(*)</span>';
    }
    else{
        $anh_sp=$_FILES['anh_sp']['name'];
        $tmp_name=$_FILES['anh_sp']['tmp_name'];
    }
    
    if($_POST["id_dm"]=='unselect'){
        $error_id_dm='<span>(*)</span>';
    }
    else{
        $id_dm=$_POST["id_dm"];
    }

    $dac_biet=$_POST["dac_biet"];

    if(isset($ten_sp) && isset($gia_sp) && isset($bao_hanh) && isset($phu_kien) && isset($tinh_trang) && isset($khuyen_mai) && isset($trang_thai) &&isset($dac_biet) && isset($chi_tiet_sp) && isset($anh_sp) && isset($id_dm)){
        move_uploaded_file($tmp_name,'anh/'.$anh_sp);
        $sql="INSERT INTO sanpham(ten_sp,gia_sp,bao_hanh,phu_kien,tinh_trang,khuyen_mai,trang_thai,dac_biet,chi_tiet_sp,anh_sp,id_dm) VALUES('".$ten_sp."','".$gia_sp."','".$bao_hanh."','".$phu_kien."','".$tinh_trang."','".$khuyen_mai."','".$trang_thai."','".$dac_biet."','".$chi_tiet_sp."','".$anh_sp."','".$id_dm."')";
        $query=mysqli_query($conn,$sql);
        header('location:index.php?page_layout=danhsachsp');
    }
}
?>


<link rel="stylesheet" href="css/themmoisp.css">
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<h3>Thêm mới sản phẩm</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        <table class="table">
        <tbody>
            <tr>
                <td>
                    Tên sản phẩm
                    <input type="text" class="form-control" name="ten_sp" required="">
                    Giá sản phẩm
                    <input type="text" class="form-control" name="gia_sp" required="">
                    Bảo hành
                    <input type="text" class="form-control" name="bao_hanh" value="12 Tháng">
                    Đi kèm
                    <input type="text" class="form-control" name="phu_kien" value="Cáp sạc, pin, nắp body">
                    <br>
                    Ảnh mô tả
                    <input type="file" name="anh_sp">
                </td>
                <td>
                    Tình trạng
                    <input type="text" class="form-control" name="tinh_trang" value="Hàng mới 100%">
                    Khuyến mãi
                    <input type="text" class="form-control" name="khuyen_mai" required="">
                    Còn hàng
                    <input type="text" class="form-control" name="trang_thai" value="Còn hàng">
                    Sản phẩm đặc biệt(Có=1; Không=0)
                    <input type="text" class="form-control" name="dac_biet">
                    <br>
                    Lựa chọn danh mục
                    <select name="id_dm">
                        <option value="unselect" selected="selected">Lựa chọn danh mục</option>
                        <?php
                        while($rowDm=mysqli_fetch_array($queryDm)){
                        ?>
                        <option value="<?php echo $rowDm['id_dm']; ?>"><?php echo $rowDm['ten_dm']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </br>
                </td>
            </tr>

        </tbody>
        </table>
        Mô tả sản phẩm
        <textarea name="chi_tiet_sp"></textarea>
        <script>
                CKEDITOR.replace( 'chi_tiet_sp');
        </script>
        <br>
        <input type="submit" name="insert" value="Thêm mới" class="btn btn-primary">
    </form>
</div> 

