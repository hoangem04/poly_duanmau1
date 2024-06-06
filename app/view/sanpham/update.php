<link rel="stylesheet" href="app/view/css/style1.css">
<div class="boxcenter">
        <div class="row mb headerAdmin">
        <h1>TRANG QUẢN TRỊ ADMIN</h1>
        </div>
        <div class="row mb menu">
            <ul>
            <li><a href="trangchu">Trang chu</a></li>
                <li><a href="listdm">Danh mục</a></li>
                <li><a href="listsp">Sản phẩm</a></li>

            </ul>
        </div>
<div class="row">
            <div class="row formtitle">
                <h1>Cập nhập sản phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="update" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $sanpham['id']?>">
                    <div class="row mb10">
                    <select name="iddm" id="">
                           
                             <?php
                               foreach($danhmuc as $dm):?>
                           <option value="<?php echo $dm['id']?>" <?php echo $dm['id']==$sanpham['iddm'] ?'selected':""?>><?php echo $dm['name']?></option>
                       <?php endforeach ?>

                    
                        </select>
                      
                    </div>
                    <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?php echo $sanpham['name']?>">
                        </div>
                        <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp" value="<?php echo $sanpham['price']?>">
                        </div>
                        <div class="row mb10">
                  Hình <br>
                    <input type="file" name="hinh"> <br> <br>
                    <img width="300px" src="<?php echo $sanpham['img']?>" alt="">
                        </div>
                        <div class="row mb10">
                    Mô tả <br>
                    <textarea name="motasp" id="" cols="30" rows="10"><?php echo $sanpham['mota']?></textarea>
                        </div>
                        <div class="row mb10">
                       
                            <input type="submit" name="sb" value="Cap nhap">
                            <input type="reset" value="Nhap lai">
                            <a href="index.php?url=listsp"><input type="button" value="Danh sach"></a> 
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