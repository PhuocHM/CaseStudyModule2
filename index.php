<?php

namespace Controller;

include_once 'view/layouts/header.php'; ?>

<?php
session_start();
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'User';
}
if (isset($_GET['action'])) {
    $action     = $_GET['action'];
} else {
    $action = 'login';
}
//Login check 
if (!isset($_SESSION['current_user']) && $action != 'login' && $action != 'register') {
    header('Location: index.php?controller=User&action=login');
}

switch ($controller) {
    case "User":
        include_once 'controller/UserController.php';
        $objController = new UserController();
        switch ($action) {
            case "login":
                $objController->login();
                break;
            case "logout":
                $objController->logout();
                break;
            case "register":
                $objController->register();
                break;
        }
        break;
    case "Homepage":
        include_once 'controller/HomepageController.php';
        $objController = new HomepageController();
        if ($action == 'list') {
            $objController->list();
        }
        break;
    case "Item":
        include_once 'controller/ItemController.php';
        $objController = new ItemController();
        switch ($action) {
            case "list":
                $id_list = $_GET["list_id"];
                $objController->list($id_list);
                break;
            case "view":
                $id_item = $_GET["item_id"];
                $objController->view($id_item);
                break;
        }

        break;
    case "Checkout":
        include_once 'controller/CheckoutController.php';
        $objController = new CheckoutController();
        switch ($action) {
            case "add":
                $objController->add();
                break;
            case "view":
                $objController->view();
                break;
            case "delete":
                $objController->deleteCart();
                break;
            case "update":
                $objController->updateCart();
                break;
            case "shipping":
                $objController->shipping();
                break;
            case "complete":
                $objController->complete();
                break;
        }
        break;
}

?>
<?php include_once 'view/layouts/footer.php'; ?>