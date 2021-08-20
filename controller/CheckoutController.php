<?php

namespace Controller;

include_once 'model/CheckoutModel.php';
include_once 'model/ListModel.php';

use Model\CheckoutModel;
use Model\ListModel;

class CheckoutController
{
    public $url_controller = 'index.php?controller=Checkout';
    public function view()
    {
        $cart = $_SESSION['cart'];
        $tmp = '';
        $sum = 0;
        $objList = new ListModel();
        $list_rows = $objList->getAll();

        foreach ($cart as $key => $value) {
            $objCheckoutModel = new CheckoutModel();
            $row = $objCheckoutModel->checkItem($key);
            $total = $row['item_price'] * $value;
            $sum += $total;
            $tmp .= '<tr>
                        <td class="hidden-xs">
                            <a href="#">
                                <img src="' . $row['item_image'] . '" alt="' . $row['item_name'] . '" />
                            </a>
                        </td>
                        <td>
                            <h5 class="product-title font-alt">' . $row['item_name'] . '</h5>
                        </td>
                        <td class="hidden-xs">
                            <h5 class="product-title font-alt">' . $row['item_price'] . '$</h5>
                        </td>
                        <td>
                            <input type="hidden" name="controller" value="Checkout">
                            <input type="hidden" name="action" value="update">
                            <input class="form-control" type="number" name="sls[' . $row['id'] . ']" value="' . $value . '" max="50" min="1" />
                        </td>
                        <td>
                            <h5 class="product-title font-alt">' .  $total . '$</h5>
                        </td>
                        <td class="pr-remove">
                            <a href="index.php?controller=Checkout&action=delete&item_id=' . $row['id'] . '" title="Remove">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>';
        }
        $_SESSION['total'] = $sum;
        // $user = $_SESSION['current_user'];
        // echo '<pre>';
        // print_r($user);
        // echo '</pre>';
        include 'view/Checkout/view.php';
    }
    function add()
    {
        //  $objCheckoutModel = new CheckoutModel();
        // $user = $_SESSION['current_user'];
        $id = $_GET["item_id"];
        $amount = $_GET["amount"];
        // $objCheckoutModel->addtoCart($user->id, $id, $amount);
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        } else {
            $cart = [];
        }
        if (isset($cart[$id])) {
            $cart[$id] += $amount;
        } else {
            $cart[$id] = $amount;
        }
        $_SESSION['cart'] = $cart;
        header('Location: ' . $this->url_controller . '&action=view');
    }
    function deleteCart()
    {
        $cart = $_SESSION['cart'];
        $id = $_GET["item_id"];
        unset($cart[$id]);
        $_SESSION['cart'] = $cart;
        header('Location: ' . $this->url_controller . '&action=view');
    }
    function updateCart()
    {

        foreach ($_REQUEST['sls'] as $key => $value) {
            $cart[$key] = $value;
        }
        $_SESSION['cart'] = $cart;
        header('Location: ' . $this->url_controller . '&action=view');
    }
    function shipping()
    {
        $objList = new ListModel();
        $list_rows = $objList->getAll();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cart = $_SESSION['cart'];
            $address = $_POST["address"];
            $current_day = date('Y-m-d');
            $total = $_SESSION['total'];
            $user_id = $_SESSION['current_user']->id;
            $objShipping = new CheckoutModel();
            $objShipping->addOrder($user_id, $address, $total, $current_day, $cart);
            unset($_SESSION['total']);
            unset($_SESSION['cart']);
            header('Location: ' . $this->url_controller . '&action=complete');
        }
        include_once 'view/Checkout/shipping.php';
    }
    function complete()
    {
        include_once 'view/Checkout/complete.php';
    }
}
