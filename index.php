<?php
require_once "vendor/autoload.php";
require_once "app/common/route.php";
use App\controller\AdminController;
// require_once "app/controller/admin.php";
// $obj=new AdminController();
// $url = isset($_GET['url']) ? $_GET['url'] : "/";
// switch ($url) {
//     case "/":
//         $obj->getAll();
//         break;
//     case "trangchu":
//         $obj->getAll();
//         break;
//     case "chitietsp":
//         $obj->chitietSP();
//         break;
//     case "dangnhap":
//         $obj->login();
//         break;
//     case "logout":
//         $obj->logout();
//         break;

//         /*ADMIN*/
//         /*Danh muc */
//     case "admin-adddm":
//         $obj->addDM();
//         if (isset($_POST['sb'])) {
//             $obj->addDMs();
//         }
//         break;
//     case "admin":
//         $obj->admin();
//         break;
//     case "listdm":
//         $obj->loadAllDM();
//         break;
//     case "suadm":
//         $obj->updateViewDM();
//         if (isset($_POST['capnhap'])) {
//             $obj->postUpdateDM();
//         }
//         break;
//     case "xoadm":
//         $obj->deleteDM();
//         break;
//     /*San pham */
//     case "listsp":
//         $obj->getAllSP();
//         break;
//     case "addsp":
//         $obj->c();
//         if(isset($_POST['sb'])){
//             // var_dump($_POST['tensp'],$_POST['giasp'],$_FILES['image'],$_POST['motasp'],$_POST['iddm']);
//             $obj-> addSPs($_POST['tensp'],$_POST['giasp'],$_FILES['image'],$_POST['motasp'],$_POST['iddm']);
//         }
//         break;
//      case "updatesp":
//         $obj->updateViewSP();
//         if(isset($_POST['sb'])){
//             $obj-> postUpdateSP();
//         }
//         break;
//     case "sanpham":
//         $obj->sanpham_danhmuc();
//         break;
//     case "deletesp":
//         $obj->postDeleteSP();
//         break;
// }
?>