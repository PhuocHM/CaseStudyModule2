<?php

namespace Model;

include_once '../model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class AssistantModel extends DatabaseConnect
{
    public function seachUser($content)
    {
        $sql = "SELECT * FROM user_data WHERE email LIKE '%$content%'";
        $stmt =  $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function findReplies()
    {
        $text = $_POST['text'];
        $sql = "SELECT replies FROM chatbot WHERE queries LIKE '%$text%'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    public function controlAssistant()
    {
        $content = $_REQUEST['content'];
        $action = $_REQUEST['action'];
        if ($action == "find product") {
            $sql = "SELECT * FROM item_type WHERE item_name LIKE '%$content%'";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetchAll();
            return $row;
        } else if ($action == "find user") {
            $sql = "SELECT * FROM user_data WHERE email LIKE '%$content%'";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetchAll();
            return $row;
        } else if ($action == "set admin") {
            $sql = "UPDATE user_data SET role='2' WHERE id='$content'";
            $this->_db->query($sql);
            return 'Oke';
        } else if ($action == "set user") {
            $sql = "UPDATE user_data SET role='1' WHERE id='$content'";
            $this->_db->query($sql);
            return 'Oke';
        }
    }
}
