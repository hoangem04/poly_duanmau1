<link rel="stylesheet" href="app/view/css/style1.css">
<div class="boxcenter">
        <div class="row mb headerAdmin">
        <h1>TRANG QUẢN TRỊ ADMIN</h1>
        </div>
        <div class="row mb menu">
            <ul>
            <li><a href="trangchu">Quay lại website</a></li>
                <li><a href="listdm">Danh mục</a></li>
                <li><a href="listsp">Sản phẩm</a></li>

            </ul>
        </div>
<div class="row">
            <div class="row formtitle">
                <h1>Danh sach loai hang</h1>
            </div>
            <div class="row formcontent">
             
                <div class="row mb10 formdsloai">
            <table >
                <tr>
                    <th></th>
                    <th>Mã lọai</th>
                    <th>Tên lọai</th>
                    <th>Chức năng</th>
                </tr>
                <?php foreach($danhmuc as $dm):?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $dm['id']?></td>
                    <td><?php echo $dm['name']?></td>
                    <td>
                      <a  href="update&id=<?php echo $dm['id']?>"><input type="button" value="Sửa"></a>  
                       <a onclick="return confirm('Bạn có muốn xóa không?')" href="xoadm&id=<?php echo $dm['id']?>"><input type="button" value="Xóa"></a> 
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">

                        <a href="adddm"><input type="button" value="Nhập thêm"></a> 
                        </div>
            </div>

        </div>