<?php 
require_once '../config.php';
require_once ROOT_PATH.'classes/Product.php';


if(isset($_GET['page']) && $_GET['page']){

    $page = $_GET['page'];
    $user = new Product;
    switch($page){
        case "create":
            $user->create();
            break;
        case "store":
            $user->store();
            break;
        case "edit":
            $user->edit();
            break;
        case "update":
            $user->update();
            break;
        case "all":
            $user->index();
            break;
        default:
            $user->index();
            break;
        
    }

}