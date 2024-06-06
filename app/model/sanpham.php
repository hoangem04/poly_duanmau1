<?php

namespace  App\model;

use App\model\db;
// require_once "db.php";
class Sanpham extends db
{
   function insert_sanpham($tensp, $giasp, $img, $motasp, $iddm)
   { /*Them*/
      $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES ('$tensp','$giasp','$img','$motasp','$iddm')";
      return $this->getData($sql);
   }
   function loadAll_sanpham($kyw = "", $iddm = 0)
   { /*Danh sach*/
      $sql = "SELECT *from sanpham where 1";
      if ($kyw != "") {
         $sql .= " and name like '%" . $kyw . "%'"; /*nếu từ nhập vào khách rỗng thì xem ... giống nó ko */
      }

      if ($iddm > 0) {
         $sql .= " and iddm='" . $iddm . "'";
      }
      $sql .= " order by id desc";
      //  $sanpham=pdo_query($sql);
      //  return $sanpham;
      return $this->getData($sql);
   }
   function loadAll_view()
   { /*nguoi dung*/
      $sql = "SELECT * FROM  sanpham  where 1 order by id desc limit 0,9";
      return $this->getData($sql);
   }
   function delete_sanpham($id)
   {
      $sanpham = $this->loadOne_sanpham($id);
      $sql = "DELETE from sanpham where id='$id' ";
      return $this->getData($sql, false);
   }
   function loadOne_sanpham($id)
   {
      $sql = "SELECT * from sanpham where id='$id'";
      return $this->getData($sql, false);
   }

   function load_sp_cungloai($id, $iddm)
   {
      $sql = "SELECT * from sanpham where iddm ='$iddm' and id <>'$id'";
      return $this->getData($sql);
   }
   function update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $hinh)
   {
      $sql = "UPDATE sanpham SET iddm='$iddm',name='$tensp',price='$giasp',image='$hinh',mota='$motasp' where id='$id'";
      return $this->getData($sql, false);
   }
}
