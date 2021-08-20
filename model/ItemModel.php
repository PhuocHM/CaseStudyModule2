<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class ItemModel extends DatabaseConnect
{

    function getAll()
    {
        $sql = "SELECT * FROM item_type";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetchAll();
        return $row;
    }
    function getOne($id)
    {
        $sql = "SELECT * FROM item_type WHERE item_id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetchAll();
        return $row;
    }
    function getOneItem($id)
    {
        $sql = "SELECT * FROM item_type WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetch();
        return $row;
    }
}
