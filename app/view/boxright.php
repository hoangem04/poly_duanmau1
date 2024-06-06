<div class="row mb">
    <style>
        li {
            list-style: none;
            margin-left: 10px;
        }

        li a {
            font-size: 15px;
        }
    </style>
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtk pl">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb10 ">
                <span style="font-size: 20px; padding-left: 10px;">
                    Xin chào: <?= $username ?>
                </span>


            </div>
            <div class="row mb10">
                <!-- <li><a href="index.php?act=quenmk">Quen mat khau</a></li> -->
                <li><a href="index.php?act=edit_tk">Cập nhập tài khoản</a></li>
                <li><a href="index.php?act=mycart">Đơn hàng</a></li>
                <?php
                if ($role == 1) { ?>
                    <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
                    <li><a href="admin">Đăng nhập ADMIN</a></li>
                <?php } ?>
                <li><a href="out">Thoát</a></li>
            </div>

        <?php
        } else {


        ?>
            <form action="dangnhap" method="post">
                <div class="row mb10">
                    Username<br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Password <br>
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="">Ghi nhớ tài khoản <br>
                </div>
                <div class="row mb10">
                    <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
                </div>
                <span style="color: red; font-size: 12px;">
                    <?php
                    if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    } else if (isset($err['err'])) {
                        echo $err['err'];
                    } else {
                        echo $err['err'] = "";
                    }
                    ?>
                </span>

            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký</a></li>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($danhmuc as $dm) : ?>
                <li><a href="sanpham&iddm=<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></a></li>
            <?php endforeach ?>

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="sanphamtk" method="post">
            <input type="text" name="kyw" placeholder="TÌM KIẾM">
            <!-- <input type="submit" name="timkiem" value="tim kiem"> -->
        </form>

    </div>

</div>
</div>