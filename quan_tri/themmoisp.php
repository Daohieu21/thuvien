<?php
$sqlDm="SELECT * FROM dmsanpham";
$queryDm=mysqli_query($conn,$sqlDm);

if(isset($_POST["insert"])){
    $ten_sp=$_POST["ten_sp"];
    $tac_gia=$_POST["tac_gia"];
    $so_trang=$_POST["so_trang"];
    $nxb=$_POST["nxb"];
    $tinh_trang=$_POST["tinh_trang"];
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

    if(isset($ten_sp) && isset($tac_gia) && isset($so_trang) && isset($nxb)&& isset($tinh_trang) &&isset($dac_biet) && isset($chi_tiet_sp) && isset($anh_sp) && isset($id_dm)){
        move_uploaded_file($tmp_name,'anh/'.$anh_sp);
        $sql="INSERT INTO sanpham(ten_sp,tac_gia,so_trang,nxb,tinh_trang,dac_biet,chi_tiet_sp,anh_sp,id_dm) 
        VALUES('".$ten_sp."','".$tac_gia."','".$so_trang."','".$nxb."','".$tinh_trang."','".$dac_biet."','".$chi_tiet_sp."','".$anh_sp."','".$id_dm."')";
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
                    Tác giả
                    <input type="text" class="form-control" name="tac_gia" required="">
                    Số trang
                    <input type="text" class="form-control" name="so_trang" required="">
                    <br>
                    Ảnh mô tả
                    <input type="file" name="anh_sp">
                </td>
                <td>
                    Nhà xuất bản
                    <input type="text" class="form-control" name="nxb" required="">
                    Tình trạng
                    <input type="text" class="form-control" name="tinh_trang" value="Mới 100%, Còn hàng">
                    Sản phẩm đặc biệt(Có=1; Không=0)
                    <input type="text" class="form-control" name="dac_biet">
                    <br>
                    Lựa chọn danh mục
                    <select name="id_dm" >
                        <option value="unselect" selected="selected">Lựa chọn danh mục</option>
                        <?php
                        while($rowDm=mysqli_fetch_array($queryDm)){
                        ?>
                        <option value="<?php echo $rowDm['id_dm']; ?>"><?php echo $rowDm['ten_dm']; ?></option>
                        <?php
                        }
                        ?>
                        <option value="">Truyện</option>

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

