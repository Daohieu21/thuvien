
<div class="row" style="max-width:1170px;margin: 0 auto; padding: 100px 0">
    <h2>Giỏ hàng của bạn</h2>
    <?php
    if(isset($_SESSION['giohang'])){
        $arrId=array();
        foreach($_SESSION['giohang'] as $id_sp=>$so_luong){
            $arrId[]=$id_sp;
        }
        $arrId=implode
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col" style="width: 40%">Sản phẩm</th>
            <th scope="col" style="width: 10%">Giá</th>
            <th scope="col" style="width: 5%">Số lượng</th>
            <th scope="col" style="width: 30%">Tổng tiền</th>
            <th scope="col" style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Máy Quay Gopro Hero 10</th>
            <td>13,990,000 VND</td>
            <td><input type="number" min="0" value="1"></td>
            <td>13,990,000 VND</td>
            <td><button  class="btn btn-danger">Xóa</button></td>
            </tr>
        </tbody>
    </table>
    <div class="button">
        <table class="table">
            <thead>
                <tr>
                <td style="width: 18%"><a href="index.php"><button class="btn btn-warning">Tiếp tục mua hàng</button></a></td>
                <td style="width: 18%"><a href=""><button class="btn btn-primary">Cập nhật giỏ hàng</button></a></td>
                <td style="width: 24%"></td>
                <td style="width: 25%"><p style="font-size:15px">Tổng tiền giỏ hàng:13,990,000 VND</p></td>
                <td style="width: 15%"><a href=""><button class="btn btn-success">Thanh toán</button></a></td>
                </tr>
            </thead>
        </table>
    </div>
    <?php
    }
    else{
        echo '<script>alert("Không có sản phẩm trong giỏ hàng của bạn");</script>';
    }
    ?>
</div>
