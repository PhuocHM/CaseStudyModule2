<?php

namespace Controller;

include_once 'model/UserManagerModel.php';

use Model\UserManagerModel;

class UserManagerController
{
    public $url_controller = 'index.php?controller=Admin';

    public  function view()
    {
        $objUserModel = new UserManagerModel();
        $rows =  $objUserModel->getAll();
        include_once 'view/EditUser/view.php';
        if (isset($_POST["role"]) & isset($_POST["user_id"])) {
            $user_id = $_POST["user_id"];
            $role = $_POST["role"];
            $objUserModel->setRoleUser($user_id, $role);
            $this->redirect($this->url_controller . '&action=view');
        }
    }
    public function seachUser()
    {
        $objUserModel = new UserManagerModel();
        $seach_content = $_GET["seach_content"];
        $rows = $objUserModel->seachUser($seach_content);
        include_once 'view/EditUser/seach.php';
        if (isset($_POST["role"]) & isset($_POST["user_id"])) {
            $user_id = $_POST["user_id"];
            $role = $_POST["role"];
            $objUserModel->setRoleUser($user_id, $role);
            $this->redirect($this->url_controller . '&action=seach&seach_content=' . $seach_content);
        }
    }
    public function deleteUser()
    {
        $id = $_GET["user_id"];
        $objUserModel = new UserManagerModel();
        $objUserModel->deleteUser($id);
        $this->redirect($this->url_controller . '&action=view');
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
