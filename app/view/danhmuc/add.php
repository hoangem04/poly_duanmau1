<link rel="stylesheet" href="app/view/css/style1.css">
<div class="boxcenter">
    <div class="row mb headerAdmin">
        <h1>TRANG QUẢN TRỊ ADMIN</h1>
    </div>
    <div class="row mb menu">
        <ul>
            <li><a href="trangchu">X-SHOP</a></li>
            <li><a href="listdm">Danh mục</a></li>
            <li><a href="listsp">Sản phẩm</a></li>

        </ul>
    </div>
    <div class="row">
        <div class="row formtitle">
            <h1>Thêm mới lọai hàng hóa</h1>
        </div>
        <div class="row formcontent">
            <form action="addms" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Mã lọai <br>
                    <input type="text" name="maloai" disabled placeholder="Auto number">
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai" required><br>
                    <span style="color: red;"><?php echo isset($err['tenloai']) ? $err['tenloai'] : "" ?></span>
                </div>

                <div class="row mb10">
                    <input type="submit" name="sb" value="Thêm mới">
                    <input type="reset" name="reset" value="Nhap lai">
                    <a href="index.php?url=listdm"><input type="button" name="listds" value="Danh sach"></a>
                </div>
            </form>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo '<p style="color:blue;">' . $thongbao . '</p>';
            }
            ?>
        </div>

    </div>
</div>