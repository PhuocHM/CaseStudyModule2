<?php

namespace Model;

include_once '../model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class UserManagerModel extends DatabaseConnect
{
    function getAll()
    {
        $sql = "SELECT * FROM user_data WHERE active='0'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    function deleteUser($id)
    {
        $sql = "UPDATE user_data SET active='1' WHERE id='$id'";
        $this->_db->query($sql);
    }
    function setRoleUser($user_id, $role)
    {
        $sql = "UPDATE user_data SET role='$role' WHERE id='$user_id'";
        $this->_db->query($sql);
    }
    function seachUser($content)
    {
        $sql = "SELECT * FROM user_data WHERE email LIKE '%$content%'";
        $stmt =  $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
