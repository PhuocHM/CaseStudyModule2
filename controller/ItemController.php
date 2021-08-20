<?php

namespace Controller;

include_once 'model/ItemModel.php';
include_once 'model/ListModel.php';

use Model\ItemModel;
use Model\ListModel;

class ItemController
{
    public $url_controller = 'index.php?controller=Item';
    public function list($id)
    {
        $objItemModel = new ItemModel();
        $rows = $objItemModel->getOne($id);
        $objList = new ListModel();
        $list_rows = $objList->getAll();
        include 'view/ItemList/list.php';
    }
    public function view($id)
    {
        $objItemModel = new ItemModel();
        $rows = $objItemModel->getOneItem($id);
        $objList = new ListModel();
        $list_rows = $objList->getAll();
        include 'view/ItemInfo/list.php';
    }
}
