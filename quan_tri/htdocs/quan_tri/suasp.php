<?php
$id_sp=$_GET['id_sp'];

$sqlDm="SELECT * FROM dmsanpham";
$queryDm=mysqli_query($conn,$sqlDm);

$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

if(isset($_POST['insert'])){
    $ten_sp=$_POST["ten_sp"];
    $gia_sp=$_POST["gia_sp"];
    $bao_hanh=$_POST["bao_hanh"];
    $phu_kien=$_POST["phu_kien"];
    $tinh_trang=$_POST["tinh_trang"];
    $khuyen_mai=$_POST["khuyen_mai"];
    $trang_thai=$_POST["trang_thai"];
    $dac_biet=$_POST["dac_biet"];
    $chi_tiet_sp=$_POST["chi_tiet_sp"];

    if($_FILES['anh_sp']['name']==""){
        $anh_sp=$_POST['anh_sp'];
    }
    else{
        $anh_sp=$_FILES['anh_sp']['name'];
        $tmp_name=$_FILES['anh_sp']['name'];
    }
    $id_dm=$_POST['id_dm'];

    if(isset($ten_sp) && isset($gia_sp) && isset($bao_hanh) && isset($phu_kien) && isset($tinh_trang) && isset($khuyen_mai) && isset($trang_thai) && isset($chi_tiet_sp)){
        move_uploaded_file($tmp_name,"anh/".$anh_sp);
        $sql="UPDATE sanpham SET ten_sp='".$ten_sp."', gia_sp='".$gia_sp."', bao_hanh='".$bao_hanh."', phu_kien='".$phu_kien."', tinh_trang='".$tinh_trang."', khuyen_mai='".$khuyen_mai."', trang_thai='".$trang_thai."', dac_biet='".$dac_biet."', chi_tiet_sp='".$chi_tiet_sp."', anh_sp='".$anh_sp."', id_dm='".$id_dm."' WHERE id_sp=$id_sp";
        $query=mysqli_query($conn,$sql);
        header('location: index.php?page_layout=danhsachsp');
    }

}

?>


<link rel="stylesheet" href="css/themmoisp.css">
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<h3>Sửa thông tin sản phẩm</h3>
<div class="new">
    <form method="post" enctype="multipart/form-data">
        <table class="table">
        <tbody>
            <tr>
                <td>
                    Tên sản phẩm
                    <input type="text" class="form-control" name="ten_sp" required="" value="<?php echo $row["ten_sp"]; ?>">
                    Giá sản phẩm
                    <input type="text" class="form-control" name="gia_sp" required="" value="<?php echo $row["gia_sp"]; ?>">
                    Bảo hành
                    <input type="text" class="form-control" name="bao_hanh" value="<?php echo $row["bao_hanh"]; ?>">
                    Đi kèm
                    <input type="text" class="form-control" name="phu_kien" value="<?php echo $row["phu_kien"]; ?>">
                    <br>
                    Ảnh mô tả
                    <input type="file" name="anh_sp"><input type="hidden" name="anh_sp" value="<?php echo $row["anh_sp"]; ?>"/>
                </td>
                <td>
                    Tình trạng
                    <input type="text" class="form-control" name="tinh_trang" value="<?php echo $row["tinh_trang"]; ?>">
                    Khuyến mãi
                    <input type="text" class="form-control" name="khuyen_mai" required="" value="<?php echo $row["khuyen_mai"]; ?>">
                    Còn hàng
                    <input type="text" class="form-control" name="trang_thai" value="<?php echo $row["trang_thai"]; ?>">
                    Sản phẩm đặc biệt(Có=1; Không=0)
                    <input type="text" class="form-control" name="dac_biet" value="<?php echo $row["dac_biet"]; ?>">
                    <br>
                    Lựa chọn danh mục
                    <select name="id_dm">
                        <?php
                        while($rowDm=mysqli_fetch_array($queryDm)){
                        ?>
                        <option
                            <?php
                            if($row['id_dm']==$rowDm['id_dm']){
                                echo 'selected="selected"';
                            }
                            ?>
                            value="<?php echo $rowDm['id_dm']; ?>"><?php echo $rowDm['ten_dm']; ?></option>
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
        <textarea name="chi_tiet_sp"><?php if(isset($_POST['chi_tiet_sp'])){echo $_POST['chi_tiet_sp'];} else{echo $row["chi_tiet_sp"];} ?></textarea>
        <script>
                CKEDITOR.replace( 'chi_tiet_sp');
        </script>
        <br>
        <input type="submit" name="insert" value="Sửa" class="btn btn-primary">
    </form>
</div> 