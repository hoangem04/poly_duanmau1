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
                <h1>Cập nhập lọai hàng hóa</h1>
            </div>
            <div class="row formcontent">
                <form action="updatedm" method="post">
                    <div class="row mb10">
                        Mã lọai <br>
                        <input type="text" name="maloai" disabled placeholder="Auto number">
                    </div>
                    <div class="row mb10">
                    Tên lọai <br>
                    <input type="text" name="tenloai" value="<?php echo $dm['name']?>">
                        </div>
                        <div class="row mb10">
                             <input type="hidden" name="id" value="<?php echo $dm['id']?>">
                            <input type="submit" name="capnhap" value="Cap nhap">
                            <input type="reset" value="Nhap lai">
                            <a href="?url=listdm"><input type="button" value="Danh sach"></a> 
                            </div>
                </form>
                <?php
          if(isset($thongbao)&& ($thongbao!="")){
              echo $thongbao;
         }
             ?>
            </div>

        </div>
    </div>