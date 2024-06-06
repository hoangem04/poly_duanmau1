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
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="row formcontent">
            <form action="adds" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Danh mục <br>
                    <select name="iddm" id="">
                        <?php foreach ($danhmuc as $dm) : ?>
                            <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>

                        <?php endforeach ?>
                    </select>

                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp"> <br>
                    <span style="color: red;"><?php echo isset($err['tensp']) ? $err['tensp'] : "" ?></span>

                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp"> <br>
                    <span style="color: red;"><?php echo isset($err['giasp']) ? $err['giasp'] : "" ?></span>

                </div>
                <div class="row mb10">
                    Hình <br>
                    <input type="file" name="image"> <br>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="motasp" id="" cols="30" rows="10" placeholder="Vui lòng nhập mô tả"></textarea>

                </div>
                <div class="row mb10">
                    <input type="submit" name="sb" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?url=listsp"><input type="button" value="Danh sach"></a>
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