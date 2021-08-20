<?php

namespace Controller;

include_once 'model/ManagerModel.php';

use Model\ManagerModel;

class ManagerController
{
    public $url_controller = 'index.php?controller=Manager';
    public function view()
    {
        $objManagerItem = new ManagerModel();
        $rows_item =  $objManagerItem->showItemWithType();
        include 'view/Editpage/view.php';
    }
    public function ajaxActive()
    {
        $id = $_GET["id"];
        $objManagerItem = new ManagerModel();
        $objManagerItem->ajaxActive($id);
        die();
    }
    public function ajaxInActive()
    {
        $id = $_GET["id"];
        $objManagerItem = new ManagerModel();
        $objManagerItem->ajaxInActive($id);
        die();
    }
    public function managerItem()
    {
        $objManagerItem = new ManagerModel();
        $rows_item =  $objManagerItem->getAllItem();
        $rows_list =  $objManagerItem->getAllList();
        include 'view/Editpage/home.php';

        if (isset($_POST['item_edit_name'])) {
            $edit_id = $_POST["item_edit_name"];
            $edit_name = $_POST["edit_name"];
            $edit_type = $_POST["item_edit_type"];
            $edit_brand = $_POST["item_edit_brand"];
            $edit_color = $_POST["item_edit_color"];
            $edit_size = $_POST["item_edit_size"];
            $edit_prices = $_POST["item_edit_prices"];
            $edit_des = $_POST["item_edit_des"];
            if ($_FILES['item_image']['size'] != 0) {
                $new_name = $objManagerItem->uploadImg("item_image");
                $objManagerItem->updateItem($edit_id, $edit_type, $edit_name, $edit_prices, $edit_des, $edit_brand, $edit_color, $edit_size, $new_name);
                $objManagerItem->noticeOke('Edit item success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_item');
            } else {
                $objManagerItem->updateItemNonImg($edit_id, $edit_type, $edit_name, $edit_prices, $edit_des, $edit_brand, $edit_color, $edit_size);
                $objManagerItem->noticeOke('Edit item success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_item');
            }
        }
        if (isset($_POST['item_add_name'])) {
            $add_id = $_POST["item_add_name"];
            $add_type = $_POST["item_add_type"];
            $add_brand = $_POST["item_add_brand"];
            $add_color = $_POST["item_add_color"];
            $add_size = $_POST["item_add_size"];
            $add_prices = $_POST["item_add_prices"];
            $add_des = $_POST["item_add_des"];
            if ($_FILES['item_add_image']['size'] != 0) {
                $new_name = $objManagerItem->uploadImg('item_add_image');
                $objManagerItem->addNewItem($add_type, $add_id, $add_prices, $add_des, $add_brand, $add_color, $add_size, $new_name);
                $objManagerItem->noticeOke('Add item success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_item');
            }
        }
    }
    public function deleteItem()
    {
        $id = $_GET["item_id"];
        $objManagerItem = new ManagerModel();
        $objManagerItem->deleteItem($id);
        $objManagerItem->noticeError('Delete item success — Check it out!');
        $this->redirect($this->url_controller . '&action=edit_item');
    }
    public function ajaxItem()
    {
        $id = $_GET["id"];
        $objManagerItem = new ManagerModel();
        $stmt = $objManagerItem->getOneItem($id);
        if ($stmt) {
            echo json_encode($stmt);
            die();
        }
    }
    public function managerList()
    {
        $objManagerItem = new ManagerModel();
        $rows_type =  $objManagerItem->getAllType();
        $rows_list =  $objManagerItem->getAllList();
        include 'view/Editpage/editlist.php';
        if (isset($_POST['edit_list_id'])) {
            $list_id = $_POST['edit_list_id'];
            $list_type = $_POST["edit_list_type"];
            $list_name = $_POST["list_name"];
            $list_info = $_POST["list_info"];
            if ($_FILES['list_image']['size'] != 0) {
                $new_name = $objManagerItem->uploadImg("list_image");
                $objManagerItem->updateList($list_id, $list_type, $list_name, $list_info, $new_name);
                $objManagerItem->noticeOke('Edit list success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_list');
            } else {

                $objManagerItem->updateListNonImg($list_id, $list_type, $list_name, $list_info);
                $objManagerItem->noticeOke('Edit list success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_list');
            }
        }
        if (isset($_POST['add_list_type'])) {
            $add_list_type = $_POST['add_list_type'];
            $add_list_name = $_POST["add_list_name"];
            $add_list_info = $_POST["add_list_info"];
            if ($_FILES['add_list_image']['size'] != 0) {
                $new_name = $objManagerItem->uploadImg("add_list_image");
                $objManagerItem->addNewList($add_list_name, $add_list_type, $add_list_info, $new_name);
                $objManagerItem->noticeOke('Added list success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_list');
            } else {
                $objManagerItem->noticeError('Please input list image !!!');
                $this->redirect($this->url_controller . '&action=edit_list');
            }
        }
    }
    public function deleteList()
    {
        $id = $_GET["item_id"];
        $objManagerItem = new ManagerModel();
        $objManagerItem->deleteList($id);
        $objManagerItem->noticeError('Delete list success — Check it out!');
        $this->redirect($this->url_controller . '&action=edit_list');
    }
    public function ajaxList()
    {
        $id = $_GET["id"];
        $objManagerItem = new ManagerModel();
        $stmt = $objManagerItem->getOneList($id);
        if ($stmt) {
            echo json_encode($stmt);
            die();
        }
    }
    public function managerType()
    {
        $objManagerItem = new ManagerModel();
        $rows_type =  $objManagerItem->getAllType();
        include_once 'view/Editpage/edittype.php';
        if (isset($_POST['add_type_t'])) {
            if ($_POST['add_type_t'] == 'Select' && !empty($_POST['type_current'])) {
                $type_name = $_POST['type_current'];
                $objManagerItem->addNewType($type_name);
                $objManagerItem->noticeOke('Add type success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_type');
            } else if ($_POST['add_type_t'] != 'Select' && !empty($_POST['type_current'])) {
                $id = $_POST['add_type_t'];
                $type_name = $_POST['type_current'];
                $objManagerItem->updateType($id, $type_name);
                $objManagerItem->noticeOke('Edit type success — Check it out!');
                $this->redirect($this->url_controller . '&action=edit_type');
            }
        }
    }
    public function deleteType()
    {
        $id = $_GET["item_id"];
        $objManagerItem = new ManagerModel();
        $objManagerItem->deleteType($id);
        $objManagerItem->noticeError('Delete type success — Check it out!');
        $this->redirect($this->url_controller . '&action=edit_type');
    }
    public function ajaxType()
    {
        $id = $_GET["id"];
        $objManagerItem = new ManagerModel();
        $stmt = $objManagerItem->getOneType($id);
        if ($stmt) {
            echo json_encode($stmt);
            die();
        }
    }
    public function redirect($url)
    {
        ob_start();
?>
        <script>
            window.location.href = '<?php echo $url; ?>';
        </script>
<?php
        echo ob_get_clean();
        die();
    }
}
