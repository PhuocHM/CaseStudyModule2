<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class CheckoutModel extends DatabaseConnect
{

    function checkItem($id)
    {
        $sql = "SELECT * FROM item_type WHERE id=$id";
        var_dump($sql);
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    function addOrder($user_id, $address, $total, $current_day, $cart)
    {
        $sql = "INSERT INTO order_data (id,user_id,user_address,item_total,order_date) VALUES (NULL, '$user_id', '$address','$total','$current_day')";
        $this->_db->query($sql);
        $id = $this->_db->lastInsertId();
        foreach ($cart as $key => $value) {
            $sql_item = "INSERT INTO item_order (id,order_id,item_id,item_amount) VALUES (NULL,'$id','$key','$value' )";
            $this->_db->query($sql_item);
        }
    }
    public function addtoCart($user_id, $item_id, $amount)
    {
        // Kiểm tra giỏ hảng của user tồn tại hay không
        $sql_check = "SELECT * FROM cart WHERE user_id = '$user_id'";
        $stmt_check = $this->_db->query($sql_check);
        $stmt_check->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt_check->fetch();
        // Nếu có thì thêm tiếp vào giỏ.
        if ($row) {
            $sql_check_cart = "SELECT * FROM cart_item WHERE cart_id = '$row->id'";
            $stmt_check_cart = $this->_db->query($sql_check_cart);
            $stmt_check_cart->setFetchMode(PDO::FETCH_OBJ);
            $row_check = $stmt_check_cart->fetch();
            if ($row_check) {
                $sql_update = "UPDATE cart_item SET amount='$amount' WHERE item_id = '$item_id'";
                $this->_db->query($sql_update);
            } else {
                $sql_update = "UPDATE cart_item SET amount='$amount' WHERE item_id = '$item_id'";
                $this->_db->query($sql_update);
            }
        }
        // Chưa có thì thêm giỏ hàng mới.
        else {
            $sql_new_cart = "INSERT INTO cart (id,user_id) VALUES (null,'$user_id')";
            $this->_db->query($sql_new_cart);
            $last_id = $this->_db->lastInsertId();
            $sql_add = "INSERT INTO cart_item (id,cart_id,item_id) VALUES (null,' $last_id',$item_id)";
            $this->_db->query($sql_add);
        }
    }
}
