<?php 




class Product{


    public function index(){
        return require_once(ROOT_PATH.'views/products/view.php');
    }

    public function store(){
        return "store";
    }


    public function create(){
        return require_once(ROOT_PATH.'views/products/create.php');
    }


    public function edit(){
        return require_once(ROOT_PATH.'views/products/edit.php');
    }


    public function update(){
        return "update";
    }


    public function delete(){
        return "delete";
    }
}