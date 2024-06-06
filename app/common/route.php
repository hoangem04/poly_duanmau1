<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ ne";
// });
//định nghĩa đường dẫn trỏ đến Product Controller

/*view */
$router->get('/', [\App\controller\AdminController::class, 'getAll']);
$router->get('trangchu', [\App\controller\AdminController::class, 'getAll']);
$router->get('out', [\App\controller\AdminController::class, 'logout']);
$router->post('dangnhap', [\App\controller\AdminController::class, 'login']);
$router->get('chitietsp', [\App\controller\AdminController::class, 'chitietSP']);
$router->get('sanpham', [\App\controller\AdminController::class, 'sanpham_danhmuc']);
$router->post('sanphamtk', [\App\controller\AdminController::class, 'sanpham_danhmuc']);
$router->get('admin', [\App\controller\AdminController::class, 'admin']);

/*admin*/
/*Danh muc*/
$router->get('listdm', [\App\controller\AdminController::class, 'loadAllDM']);
$router->get('adddm', [\App\controller\AdminController::class, 'addDM']);
$router->post('addms', [\App\controller\AdminController::class, 'addDMs']);
$router->get('update', [\App\controller\AdminController::class, 'updateViewDM']);
$router->post('updatedm', [\App\controller\AdminController::class, 'postUpdateDM']);
$router->get('xoadm', [\App\controller\AdminController::class, 'deleteDM']);
/*San pham */
$router->get('listsp', [\App\controller\AdminController::class, 'getAllSP']);
$router->get('addsp', [\App\controller\AdminController::class, 'addSP']);
$router->post('adds', [\App\controller\AdminController::class, 'addSPs']);
$router->get('updatesp', [\App\controller\AdminController::class, 'updateViewSP']);
$router->post('update', [\App\controller\AdminController::class, 'postUpdateSP']);
$router->get('deletesp', [\App\controller\AdminController::class, 'postDeleteSP']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
