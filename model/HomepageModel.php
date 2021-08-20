<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class HomepageModel extends DatabaseConnect
{
    public function getAll()
    {
        $sql = "SELECT * FROM item_list";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM item_list WHERE id='$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();
        return $row;
    }
}
