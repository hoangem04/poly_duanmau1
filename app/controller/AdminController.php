<?php

namespace App\controller;

use App\model\Danhmuc;
use App\model\Sanpham;
// require_once "app/model/sanpham.php";
// require_once "app/model/taikhoan.php";
session_start();

class AdminController extends Danhmuc
{
    function addDM()
    {
        include "app/view/danhmuc/add.php";
    }
    function addDMs()
    {
        if (isset($_POST['sb'])) {
            $tenloai = $_POST['tenloai'];
            $check = $this->insert_danhmuc($tenloai);
            if (!$check) {
                echo '<script>alert("Thêm sản phẩm thành công")</script>';
                echo '<script>window.location.href = "index.php?url=listdm";</script>';
            } else {
                echo '<script>alert("Lỗi thêm sản phẩm ");</script>';
            }
        }
    }
    function loadAllDM()
    {
        $danhmuc = $this->loadAll_danhmuc();
        include "app/view/danhmuc/list.php";
    }
    function admin()
    {
        include "app/view/admin.php";
    }
    function updateViewDM()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $dm = $this->loadOne($id);
        include "app/view/danhmuc/update.php";
    }
    function postUpdateDM()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $ten = $_POST['tenloai'];
        $check = $this->update_danhmuc($id, $ten);
        if (!$check) {
            echo '<script>alert("Sửa thành công")</script>';
            echo '<script>window.location.href = "listdm";</script>';
        } else {
            echo '<script>alert("Lỗi thêm sản phẩm ");</script>';
        }
    }
    function deleteDM()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $check = $this->delete_danhmuc($id);
        if (!$check) {
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href = "listdm";</script>';
        } else {
            echo '<script>alert("Lỗi thêm sản phẩm ");</script>';
        }
    }
    /*San pham */

    function getAllSP()
    {
        $obj = new Sanpham();
        $sanpham = $obj->loadAll_sanpham();
        include "app/view/sanpham/list.php";
    }
    function addSP()
    {
        $danhmuc = $this->loadAll_danhmuc();

        include "app/view/sanpham/add.php";
    }
    function addSPs()
    {
        //addSPs($_POST['tensp'],$_POST['giasp'],$_FILES['image'],$_POST['motasp'],$_POST['iddm']);

        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $image = $_FILES['image'];
        $motasp = $_POST['motasp'];
        $iddm = $_POST['iddm'];
        $obj = new Sanpham();
        $targetDir = "upload/";
        $targetFile = $targetDir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            $image_url = $targetFile;
        }
        $obj->insert_sanpham($tensp, $giasp, $image_url, $motasp, $iddm);
        header("location:listsp");
    }
    function updateViewSP()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Sanpham();
        $sanpham = $obj->loadOne_sanpham($id);
        $danhmuc = $this->loadAll_danhmuc();

        // $danhmuc=loadAllDM();
        include "app/view/sanpham/update.php";
    }
    function postUpdateSP()
    {
        $obj = new Sanpham();
        $id = $_POST['id'];
        $sanpham = $obj->loadOne_sanpham($id);
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $motasp = $_POST['motasp'];
        $iddm = $_POST['iddm'];
        $image = $_FILES['hinh'];

        $targetDir = "upload/";

        $targetFile = $targetDir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            $image_url = $targetFile;
        } else {
            $image_url = $sanpham['img'];
        }
        $check = $obj->update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $image_url);
        if (!$check) {
            echo '<script>alert("Cập nhật sản phẩm thành công")</script>';
            echo '<script>window.location.href = "index.php?url=listsp";</script>';
        } else {
            echo '<script>alert("Cập nhật sản phẩm thất bại")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }
    function postDeleteSP()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Sanpham();
        $check = $obj->delete_sanpham($id);
        if (!$check) {
            echo '<script>alert("Xóa sản phẩm thành công")</script>';
            echo '<script>window.location.href = "index.php?url=listsp";</script>';
        } else {
            echo '<script>alert("Cập nhật sản phẩm thất bại")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }
    function getAll()
    {
        $obj = new Sanpham();
        $danhmuc = $this->loadAll_danhmuc();
        $spnew = $obj->loadAll_view();
        include "app/view/trangchu.php";
    }
    function chitietSP()
    {
        $obj = new Sanpham();
        $id = isset($_GET['idsp']) ? $_GET['idsp'] : null;
        $danhmuc = $this->loadAll_danhmuc();
        //  $binhluan=load_binhluan($id);
        $onesp = $obj->loadOne_sanpham($id);
        extract($onesp);
        $sp_cungloai = $obj->load_sp_cungloai($id, $iddm);
        include "app/view/chitietsp.php";
    }

    function login()
    {
        $obj = new Sanpham();
        $danhmuc = $this->loadAll_danhmuc();
        $spnew = $obj->loadAll_view();
        if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $err = [];
            $checkuser = $this->check_user($user, $pass);
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                header("location:index.php");
            } else if (empty($user) && empty($pass)) {
                $err['err'] = "Vui lòng nhập thông tin";
            } else {
                $thongbao = "Sai thông tin đăng nhập";
            }
        }
        include "app/view/trangchu.php";
    }
    function logout()
    {
        $obj = new Sanpham();
        $danhmuc = $this->loadAll_danhmuc();
        $spnew = $obj->loadAll_view();
        unset($_SESSION['user']);
        include "app/view/trangchu.php";
    }

    function sanpham_danhmuc()
    {
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {/*tim kiem san pham*/
            $kyw = $_POST['kyw'];
        } else {
            $kyw = "";
        }

        if (isset($_GET['iddm'])) {/*lay san pham theo danh muc*/
            $iddm = $_GET['iddm'];
        } else {
            $iddm = "";
        }
        $obj = new Sanpham();
        $ten = $this->load_tendm($iddm);
        $danhmuc = $this->loadAll_danhmuc();
        $spnew = $obj->loadAll_view();
        $ds_sanpham = $obj->loadAll_sanpham($kyw, $iddm);
        include "app/view/sanpham_dm.php";
        // include "view/sanpham_danhmuc.php";
    }
}
