<?php
define('ARR_CONTROLLER',['blog']);

$ctrl = "blog";
if(in_array($ctrl, ARR_CONTROLLER)==false) die('Không tồn tại địa chỉ');
$pathFile = "controllers/$ctrl.php";

if(file_exists($pathFile)==true){
    require_once "controllers/baseController.php";
    require_once $pathFile;
    $controller = new $ctrl;
    $act = "index";
    if(isset($_GET['act'])) $act = $_GET['act'];
    if(method_exists($controller, $act)==false){
        echo "page not found";
    }else{
         $controller->$act();
    }
}else{
    echo "PAGE NOT FOUND";
}


?>