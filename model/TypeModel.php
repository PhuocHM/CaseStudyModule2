<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class TypeModel extends DatabaseConnect
{

    function getAll()
    {
        $sql = "SELECT * FROM type";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetchAll();
        return $row;
    }
}
