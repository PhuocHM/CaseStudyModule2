<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class ListModel extends DatabaseConnect
{

    function getAll()
    {
        $sql = "SELECT * FROM item_list";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetchAll();
        return $row;
    }
}
