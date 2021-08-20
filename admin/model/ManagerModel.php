<?php

namespace Model;

include_once '../model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class ManagerModel extends DatabaseConnect
{

    public function getAllItem()
    {
        $sql = "SELECT * FROM item_type";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getOneItem($id)
    {
        $sql = "SELECT * FROM item_type WHERE id='$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        if ($row['id']) {
            return $row;
        } else {
            return false;
        }
    }
    //
    public function updateItem($id, $item_id, $item_name, $item_price, $item_info, $item_brand, $item_color, $item_size, $item_image)
    {
        $sql = "UPDATE item_type SET item_name='$item_name',item_id='$item_id', item_price='$item_price', item_info= '$item_info', item_brand='$item_brand', item_color= '$item_color',item_size= '$item_size',item_image= '$item_image' WHERE id='$id'";
        $this->_db->query($sql);
    }
    //
    public function updateItemNonImg($id, $item_id, $item_name, $item_price, $item_info, $item_brand, $item_color, $item_size)
    {
        $sql = "UPDATE item_type SET item_name='$item_name',item_id='$item_id', item_price='$item_price', item_info= '$item_info', item_brand='$item_brand', item_color= '$item_color',item_size= '$item_size' WHERE id='$id'";
        $this->_db->query($sql);
    }
    //ADD NEW ITEM
    public function addNewItem($add_type, $add_id, $add_prices, $add_des, $add_brand, $add_color, $add_size, $new_name)
    {
        $sql = "INSERT INTO item_type (id,item_id,item_name,item_price,item_info,item_brand,item_color,item_size,item_image) VALUES (NULL,'$add_type','$add_id','$add_prices','$add_des','$add_brand','$add_color','$add_size','$new_name')";
        $this->_db->query($sql);
    }
    public function addNewList($add_list_name, $add_list_id, $add_list_info, $new_name)
    {
        $sql = "INSERT INTO item_list (id,item_name,item_type,item_info,item_image) VALUES (NULL,'$add_list_name','$add_list_id','$add_list_info','$new_name')";
        $this->_db->query($sql);
    }
    public function addNewType($type_name)
    {
        $sql = "INSERT INTO type (id,item_type) VALUES (NULL,'$type_name')";
        $this->_db->query($sql);
    }
    //DELETE ITEM
    public function deleteItem($id)
    {
        $sql = "DELETE FROM item_type WHERE id='$id'";
        $this->_db->query($sql);
    }
    public function deleteList($id)
    {
        $sql = "DELETE FROM item_list WHERE id='$id'";
        $this->_db->query($sql);
    }
    public function deleteType($id)
    {
        $sql = "DELETE FROM type WHERE id='$id'";
        $this->_db->query($sql);
    }
    public function getAllType()
    {
        $sql = "SELECT * FROM type";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //////////////
    public function updateList($id, $type_id, $item_name, $item_info, $item_image)
    {
        $sql = "UPDATE item_list SET item_name='$item_name',item_type='$type_id', item_info='$item_info', item_image= '$item_image' WHERE id='$id'";
        $this->_db->query($sql);
    }
    //
    public function updateListNonImg($id, $type_id, $item_name,  $type_info)
    {
        $sql = "UPDATE item_list SET item_name='$item_name',item_type='$type_id', item_info='$type_info' WHERE id='$id'";
        $this->_db->query($sql);
    }
    public function updateType($id, $type_name)
    {
        $sql = "UPDATE type SET item_type='$type_name' WHERE id = '$id'";
        $this->_db->query($sql);
    }
    ///////////////
    public function getOneType($id)
    {
        $sql = "SELECT * FROM type WHERE id='$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    public function getAllList()
    {
        $sql = "SELECT * FROM item_list";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getOneList($id)
    {
        $sql = "SELECT * FROM item_list WHERE id='$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        if ($row['id']) {
            return $row;
        } else {
            return false;
        }
    }
    public function noticeOke($text)
    {
        $_SESSION['notice'] = '
        <div class="alert alert-success" role="alert">
            ' . $text . '
        </div>';
    }
    public function noticeError($text)
    {
        $_SESSION['notice'] =  '<div class="alert alert-danger" role="alert">
        ' . $text . '
      </div>';
    }
    public function uploadImg($file_name)
    {
        $upload_directory =  "../public/images/";
        $temp_name = $_FILES[$file_name]["tmp_name"];
        $temp_file_extension = pathinfo($temp_name, PATHINFO_EXTENSION);
        $new_name = $_FILES[$file_name]['name'];
        move_uploaded_file($temp_name, $upload_directory . $new_name);
        return 'public/images/' . $new_name;
    }
    public function showItemWithType()
    {
        $sql = "SELECT * FROM item_type";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function ajaxActive($id)
    {
        $sql = "UPDATE item_type SET status ='0' WHERE id='$id'  ";
        $this->_db->query($sql);
    }
    public function ajaxInActive($id)
    {
        $sql = "UPDATE item_type SET status ='1' WHERE id='$id'  ";
        $this->_db->query($sql);
    }
}
