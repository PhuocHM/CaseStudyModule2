<?php

namespace Model;

include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class UserModel extends DatabaseConnect
{

    function checklogin($email, $password)
    {
        $sql = "SELECT * FROM user_data WHERE email='$email' AND password='$password'";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetch();
        if ($row->id) {
            return $row;
        } else {
            return false;
        }
    }
    function checkRole($email)
    {
        $sql = "SELECT role FROM user_data WHERE email='$email'";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetch();
        return $row->role;
    }
    function checkEmail($email)
    {
        $sql = "SELECT * FROM user_data WHERE email='$email'";
        $stmt   = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row    = $stmt->fetch();
        if ($row->id) {
            return 'false';
        } else {
            return 'true';
        }
    }
    function register($name, $email, $password)
    {
        $sql = "INSERT INTO user_data (id,username,email,password) VALUES (NULL, '$name', '$email', '$password')";
        $this->_db->query($sql);
    }
}
