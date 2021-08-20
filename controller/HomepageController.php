<?php

namespace Controller;

include_once 'model/HomepageModel.php';
include_once 'model/TypeModel.php';
include_once 'model/ListModel.php';

use Model\HomepageModel;
use Model\TypeModel;
use Model\ListModel;


class HomepageController
{
    public $url_controller = 'index.php?controller=Homepage';
    public function list()
    {
        $objHomepageModel = new HomepageModel();
        $rows = $objHomepageModel->getall();
        $objType = new TypeModel();
        $type_rows = $objType->getAll();
        $objList = new ListModel();
        $list_rows = $objList->getAll();
        include 'view/Homepage/list.php';
    }
}
