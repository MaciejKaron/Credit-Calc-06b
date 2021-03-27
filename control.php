<?php

require_once 'init.php';


switch($action){
    default :
    $ctrl = new app\controllers\CalcCtrl();
    $ctrl->generateView();
    break;
    
    case 'CalcCompute' :
    $ctrl = new app\controllers\CalcCtrl();
    $ctrl->process();
    break;

    case 'action1' :
    break;
}



