<?php

namespace Model;

include_once '../model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class HomeModel extends DatabaseConnect
{
    public function getAllOrder()
    {
        $sql = "SELECT item_total,order_date FROM order_data";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function showAllOrder()
    {
        $sql = "SELECT * FROM user_data 
        JOIN order_data ON user_data.id = order_data.user_id ORDER BY order_date DESC";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows_order = $stmt->fetchAll();
        return $rows_order;
    }
    public function countAcceptOrder()
    {
        $sql = "SELECT * FROM order_data WHERE status ='1'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows_order = $stmt->fetchAll();
        if ($rows_order) {
            return $rows_order;
        } else {
            return false;
        }
    }
    public function deleteOrder($id)
    {
        $sql = "DELETE FROM item_order WHERE order_id='$id'";
        $this->_db->query($sql);
        $sql_order = "DELETE FROM order_data WHERE id='$id'";
        $this->_db->query($sql_order);
    }
    public function acceptOrder($id)
    {
        $sql = "UPDATE order_data set status = '1' WHERE id='$id'";
        $this->_db->query($sql);
    }
    public function getPlan()
    {
        $sql = "SELECT * FROM work_plan ORDER BY time_update DESC";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function addPlan($content, $time)
    {
        $sql = "INSERT INTO work_plan (id,plan,time_update) VALUES (NULL,'$content','$time')";
        $this->_db->query($sql);
    }
    public function getOneOrder($id)
    {
        // $sql = "SELECT * FROM item_order WHERE order_id = '$id'";
        $sql = "SELECT * FROM item_order 
         JOIN order_data ON order_data.id = item_order.order_id 
         JOIN user_data ON user_data.id = order_data.user_id
         JOIN item_type ON item_type.id = item_order.item_id
         WHERE order_id='$id' ";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();
        return $row;
    }
}
