<?php

namespace Controller;

include_once 'model/HomeModel.php';

use Model\HomeModel;

class HomeController
{
    public $url_controller = 'index.php?controller=Home';

    public function view()
    {
        $total = [];
        $cost = [];
        $month = [];
        $objHomeModel = new HomeModel();
        $stmt =  $objHomeModel->getAllOrder();

        if ($stmt) {
            foreach ($stmt as $key => $value) {
                if (empty($total)) {
                    $date = date("m", strtotime($value->order_date));
                    $total[$date] = $value->item_total;
                } else {
                    $check = true;
                    foreach ($total as $keys => $values) {
                        if ($keys == date("m", strtotime($value->order_date))) {
                            $total[$keys] += $value->item_total;
                            $check = false;
                            break;
                        }
                    }
                    if ($check) {
                        $date = date("m", strtotime($value->order_date));
                        $total[$date] = $value->item_total;
                    }
                }
                ksort($total);
            }
        }
        if (!empty($total)) {
            foreach ($total as $key => $value) {
                $month[] = $key;
                $value = round($value);
                $cost[] = $value;
            }
        }
        // $total = json_encode($total);
        $month = json_encode($month);
        $cost = json_encode($cost);
        $rows_order = $objHomeModel->ShowAllOrder();
        $count_order = $objHomeModel->countAcceptOrder();
        $count = 0;
        if ($count_order) {
            foreach ($count_order as $key => $value) {
                $count += 1;
            }
        }
        $work_plans = $objHomeModel->getPlan();
        include_once 'view/Homepage/view.php';
        if (isset($_POST["new_plan"])) {
            $content = $_POST["new_plan"];
            $time = date('Y-m-d');
            $objHomeModel->addPlan($content, $time);
            $this->redirect($this->url_controller . '&action=view');
        }
    }
    public function deleteOrder()
    {
        $id = $_GET["order_id"];
        $objHomeModel = new HomeModel();
        $objHomeModel->deleteOrder($id);
        $this->redirect($this->url_controller . '&action=view');
    }
    public function acceptOrder()
    {
        $id = $_GET["order_id"];
        $objHomeModel = new HomeModel();
        $objHomeModel->acceptOrder($id);
        $this->redirect($this->url_controller . '&action=view');
    }
    public function logout()
    {
        unset($_SESSION['current_user']);
        $this->redirect('../index.php?controller=User&action=login');
    }
    public function ajaxOrder()
    {
        $id = $_GET["order_id"];
        $objHomeModel = new HomeModel();
        $row = $objHomeModel->getOneOrder($id);
        if ($row) {
            echo json_encode($row);
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
