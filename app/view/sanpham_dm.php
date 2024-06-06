<link rel="stylesheet" href="app/view/css/style1.css">
<?php include "header.php"?>
<div class="row mb">
            <div class="boxtrai mr ">
            <div class="row mb">
                    <div class="boxtitle">

                        <?php isset($_get['iddm'])? $ten['name']:null?>
                    <?php
                    if(isset($_POST['kyw'])&&$_POST['kyw']!=""){
                     $a=$_POST['kyw'];
                        echo 'Ket qua tim kiem voi tu khoa '."'$a'";
                    }
                    ?>
                </div> 
                   
                    <div class="row boxcontent">
                    <?php
                    $i=0;
                    foreach($ds_sanpham as $sp):?>
                       
                       <div class="boxsp <?php echo ($i==2||$i==5||$i==8) ?"":"mr"?>">
                        <div class="row img ">
                           <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id']?>"><img  src="<?php echo $sp['img'] ?>" alt=""></a> 
                           <p style="font-weight: 800;"><?php echo $sp['price']?></p>
                        <a style="text-decoration: none;" href="index.php?url=chitietsp&idsp=<?php echo $sp['id']?>"?><?php echo $sp['name']?></a>

                        </div>
                       
                        
                       </div>
                       
                    <?php endforeach ?>
                   
                    </div>
                         
                            
                    
                        
                    </div>
                    
                   
                </div>
                <div class="boxphai">
                <?php include "boxright.php"; ?>
            </div>
        </div>
        
      