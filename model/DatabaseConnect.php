<?php

namespace Model;

use PDO;

class DatabaseConnect
{
    protected $_db = null;

    public function __construct()
    {
        $username = 'root';
        $password = '';
        $this->_db = new PDO('mysql:host=localhost;dbname=sparkcompany', $username, $password);
    }
}
