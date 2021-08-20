<?php

namespace Controller;

use Exception;

session_start();
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'Home';
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view';
}
if (!isset($_SESSION['current_user'])) {
    header('Location: ../index.php?controller=User&action=login');
}
if (strpos($_GET["action"], 'ajax') === false) {
    include_once 'view/layouts/header.php';
}

?>

<?php

try {
    switch ($controller) {
        case "Manager":
            include_once 'controller/ManagerController.php';
            $objController = new ManagerController();
            try {
                switch ($action) {
                    case "edit_item":
                        $objController->managerItem();
                        break;
                    case "delete_item":
                        $objController->deleteItem();
                        break;
                    case "ajax_item":
                        $objController->ajaxItem();
                        break;
                    case "edit_list":
                        $objController->managerList();
                        break;
                    case "delete_list":
                        $objController->deleteList();
                        break;
                    case "ajax_list":
                        $objController->ajaxList();
                        break;
                    case "edit_type":
                        $objController->managerType();
                        break;
                    case "delete_type":
                        $objController->deleteType();
                        break;
                    case "ajax_type":
                        $objController->ajaxType();
                        break;
                    case "ajax_item_active":
                        $objController->ajaxActive();
                        break;
                    case "ajax_item_inactive":
                        $objController->ajaxInActive();
                        break;
                    case "view":
                        $objController->view();
                        break;
                    default:
                        throw new Exception("invalid action for controller manager !");
                }
            } catch (Exception $e) {
                include_once 'view/404/view.php';
            }
            break;
        case "Home":
            include_once 'controller/HomeController.php';
            $objController = new HomeController();
            try {
                switch ($action) {
                    case "view":
                        $objController->view();
                        break;
                    case "accept_order":
                        $objController->acceptOrder();
                        break;
                    case "delete_order":
                        $objController->deleteOrder();
                        break;
                    case "logout":
                        $objController->logout();
                        break;
                    case "ajax_order":
                        $objController->ajaxOrder();
                        break;
                    default:
                        throw new Exception("invalid action for controller home !");
                }
            } catch (Exception $e) {
                include_once 'view/404/view.php';
            }
            break;

        case "Admin":
            include_once 'controller/UserController.php';
            $objController = new UserManagerController();
            try {
                switch ($action) {
                    case "view":
                        $objController->view();
                        break;
                    case "seach":
                        $objController->seachUser();
                        break;
                    case "delete_user":
                        $objController->deleteUser();
                        break;
                    default:
                        throw new Exception("invalid action for controller admin !");
                }
            } catch (Exception $e) {
                include_once 'view/404/view.php';
            }
            break;
        case "Assistant":
            include_once 'controller/AssistantController.php';
            $objController = new AssistantController();
            try {
                switch ($action) {
                    case "view":
                        $objController->view();
                        break;
                    case "ajax_find_replies":
                        $objController->findReplies();
                        break;
                    case "ajax_find_product":
                        $objController->findProducts();
                        break;
                    default:
                        throw new Exception("invalid action for controller assisstant !");
                }
            } catch (Exception $e) {
                include_once 'view/404/view.php';
            }
            break;
        default:
            throw new Exception("invalid Controller !");
    }
} catch (Exception $e) {
    include_once 'view/404/view.php';
}
?>
<?php
if (strpos($_GET["action"], 'ajax') === false) {
    include_once 'view/layouts/footer.php';
}
?>