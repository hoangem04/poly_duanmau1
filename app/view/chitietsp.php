<link rel="stylesheet" href="app/view/css/style1.css">
<?php
if (isset($onesp)) {
    extract($onesp);
}
?>
<?php
include "header.php";
?>
<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle"><?php echo $onesp['name'] ?></div>
            <div class="row boxcontent">

                <div class="row mb ctsp">
                    <div class="anh" style="display: flex;
    flex-direction: row;
    align-items: center;padding-left: 20px;
 
">

                        <img src="<?php echo $onesp['image'] ?>" alt="">





                        <div class="thongtin mr" style="padding: 10px 20px;">


                            Tên hàng: <input style="width: 33%; text-align: center;margin-bottom: 10px;background-color:#cbc3c3" type="text" disabled placeholder="<?php echo $name ?>"> <br>
                            Đơn giá: <input style="width: 33%; text-align: center;margin-left: 6px;background-color:#cbc3c3" type="text" disabled placeholder="<?php echo $price . '$' ?>"><br>
                        </div>

                    </div>

                </div>
                <h2 style="padding-left: 15px;">Mô tả sản phẩm</h2>
                <hr>
                <p style="padding-left: 15px;"><?php echo $onesp['mota'] ?></p>

            </div>

        </div>

    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>

</div>