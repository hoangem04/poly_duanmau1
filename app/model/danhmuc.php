<?php

namespace  App\model;

use  App\model\db;
// require_once "db.php";
class Danhmuc extends db
{
   function insert_danhmuc($tenloai)
   { /*Them*/
      $sql = "INSERT INTO danhmuc(name) values ('$tenloai')";
      return $this->getData($sql);
   }
   function loadAll_danhmuc()
   { /*Danh sach*/
      $sql = "SELECT *from danhmuc order by id asc";
      return $this->getData($sql);
   }
   function delete_danhmuc($id)
   {/*Xoa */

      $sql = "DELETE from danhmuc where id='$id'";
      return $this->getData($sql, false);
   }
   function loadOne($id)
   {/* Lay ra 1 ban ghi tu 1 id*/
      $sql = "SELECT * from danhmuc where id='$id'";
      // $dm=pdo_query_one($sql);
      // return $dm;
      return $this->getData($sql, false);
   }
   function update_danhmuc($id, $tenloai)
   {
      $sql = "UPDATE danhmuc SET name='$tenloai' where id='$id'";
      return $this->getData($sql, false);
   }
   function load_tendm($iddm)
   {
      $sql = "SELECT name from danhmuc where id='$iddm'";
      return $this->getData($sql, false);
   }
   function check_user($user, $pass)
   {
      $sql = "SELECT * FROM `taikhoan` WHERE  username='$user' AND 	password='$pass'";

      return $this->getData($sql, false);
   }
}
