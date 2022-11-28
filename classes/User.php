<?php 




class User{

    private $db;
    public function __construct()
    {
        $this->db = (new DB())->connect();
    }

    public function index(){
        return require_once(ROOT_PATH.'views/users/view.php');
    }

    public function store(){
        return "store";
    }


    public function create(){
        return require_once(ROOT_PATH.'views/users/create.php');
    }


    public function edit(){
        return require_once(ROOT_PATH.'views/users/edit.php');
    }


    public function update(){
        return "update";
    }


    public function delete(){
        return "delete";
    }
}