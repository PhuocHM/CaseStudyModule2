<?php

namespace Controller;

include_once 'model/AssistantModel.php';

use Model\AssistantModel;

class AssistantController
{
    function view()
    {
        include_once 'view/Assistant/view.php';
    }
    function findReplies()
    {
        $objAssistantModel = new AssistantModel();
        $rows =  $objAssistantModel->findReplies();
        if ($rows) {
            $replay = $rows['replies'];
            echo $replay;
        } else {
            echo "Sorry can't be able to understand you!";
        }
    }
    function findProducts()
    {
        $objAssistantModel = new AssistantModel();
        $rows =  $objAssistantModel->controlAssistant();
        if ($rows) {
            echo json_encode($rows);
        } else {
            echo 'Error !';
        }
    }
}
