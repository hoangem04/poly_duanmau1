<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du an mau</title>
    <link rel="stylesheet" href="app/view/css/style1.css">

    <!-- <link rel="stylesheet" href="..view/css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <!-- <link rel="stylesheet" href="icon/themify-icons/themify-icons.css"> -->
</head>


<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>SHOP THỜI TRANG NAM & NỮ HWANG</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ </a></li>
                <li><a href="?act=gioithieu">Giới thiệu</a></li>
                <li><a href="?act=lienhe">Liên hệ</a></li>
                <li><a href="?act=gopy">Góp ý</a></li>
                <li><a href="?act=hoidap">Hỏi đáp</a></li>
                <li><a href="index.php?act=viewcart">Giỏ hàng</a></li>
            </ul>
        </div>

        <div class="row mb">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner mb">
                        <img style="max-width: 100%;" src="upload/anh0.jpg" alt="">
                    </div>
                </div>
                <div class="row">


                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) : ?>

                        <div class="boxsp <?php echo ($i == 2 || $i == 5 || $i == 8) ? "" : "mr" ?>">
                            <div class="row img ">
                                <a href="chitietsp&idsp=<?php echo $sp['id'] ?>"><img src="<?php echo $sp['img'] ?>" alt=""></a>
                                <p style="font-weight: 800;"><?php echo number_format($sp['price']) ?>đ</p>
                                <a style="text-decoration: none; font-size: 15px;color:red;" href="chitietsp&idsp=<?php echo $sp['id'] ?>" ?><?php echo $sp['name'] ?></a>
                                <div class="mua">
                                    <form action="index.php?act=addcart" class="themgiohang" method="post">
                                        <input type="hidden" name="id" value="<?php echo $sp['id'] ?>">
                                        <input type="hidden" name="name" value="<?php echo $sp['name'] ?>">
                                        <input type="hidden" name="img" value="<?php echo $sp['img'] ?>">
                                        <input type="hidden" name="price" value="<?php echo number_format($sp['price']) ?>">
                                        <?php

                                        if (!isset($_SESSION['user'])) {
                                            $id = $sp['id'];
                                            echo '  <a href="chitietsp&idsp=' . $id . '"> <input type="button" value="Xem thêm"></a>
                            ';
                                        } else {
                                            echo ' <input type="submit" name="addcart" value="Thêm vào giỏ hàng">  ';
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>


                        </div>

                    <?php endforeach ?>


                </div>

            </div>
            <div class="boxphai">
                <?php include "boxright.php"; ?>
            </div>
        </div>
        <script>
            var slides = document.getElementsByClassName('slide');
            var sileIndex = 0;
            sildeshow();

            function sildeshow() {
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                }
                sileIndex++;
                if (sileIndex > slides.length - 1) {
                    sileIndex = 0
                }
                slides[sileIndex].style.display = 'block';
                setTimeout(sildeshow, 1000);
                //setInterval(sildeshow,5000)
            }
        </script>