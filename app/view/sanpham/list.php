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
        <div class="row formtitle mb">
            <h1>Danh sách sản pham </h1>
        </div>
        <!-- <form action="index.php?url=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                        <?php foreach ($danhmuc as $dm) : ?>
                    <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
                    <?php endforeach ?>
                        </select>
                        <input type="submit" name="btn-sb" value="Tìm kiếm">
                    </form> -->
        <div class="row formcontent">

            <div class="row mb10 formdsloai spadmin">

                <table>
                    <tr>
                        <th></th>
                        <th>Mã lọai</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Mô tả</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php foreach ($sanpham as $sp) : ?>

                        <tr>
                            <td><input type="checkbox" name="checkboxName" id=""></td>
                            <td><?php echo $sp['id'] ?></td>
                            <td><?php echo $sp['name'] ?></td>
                            <td><?php echo $sp['price'] ?></td>
                            <td>
                                <img width="150px" src="<?php echo $sp['image'] ?>" alt="">
                            </td>
                            <td><?php echo $sp['mota'] ?></td>
                            <td>
                                <a href="updatesp&id=<?php echo $sp['id'] ?>"><input type="button" value="Sửa"></a>
                                <a href="deletesp&id=<?php echo $sp['id'] ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>

                    <?php endforeach ?>

                </table>
            </div>
            <div class="row mb10">
                <input type="checkbox" id="checkAll"> Chọn tất cả

                <input type="button" value="Bỏ chọn tất cả">
                <a href="index.php?act=xoasp&id=<?php echo $sp['id'] ?>"> <input type="button" value="Xóa các mục đã chọn"></a>

                <a href="addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>

    </div>
</div>
<script>
    document.getElementById('checkAll').onclick = function() {
        var checkboxes = document.getElementsByName('checkboxName');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
        }
    };
</script>