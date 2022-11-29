<?php 
require_once '../config.php';
require_once ROOT_PATH.'classes/Product.php';


if(isset($_GET['page']) && $_GET['page']){

    $page = $_GET['page'];
    $product = new Product;
    switch($page){
        case "create":
            $product->create();
            break;
        case "store":
            $product->store(new Request());
            break;
        case "edit":
            $product->edit();
            break;
        case "update":
            $product->update();
            break;
        case "all":
            $product->index();
            break;
        case "search":
            $product->search(new Request());
            break;
        default:
            $product->index();
            break;
        
    }

}else{
    $product = new Product;

    $product->index();
}