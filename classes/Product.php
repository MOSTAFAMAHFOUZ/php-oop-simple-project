<?php 




class Product{

    private $db;
    private $response;
    public function __construct()
    {
        $this->db = new DB();
        $this->response = new Response();
    }

    public function index(){
        $products = $this->db->getAll("SELECT * FROM `products`");
        return require_once(ROOT_PATH.'views/products/view.php');
    }

    public function store($request){
        // sanitization
        $name = $request->postInput('name');
        $price = $request->postInput('price');

        // validation

        // insert
        $query = "INSERT INTO `products` (`name`,`price`) VALUES('$name','$price') ";
        $result = $this->db->insert($query);
        if($result){
            Session::setSession('success',"data added successfully");
            $this->response->redirect("products/index.php?page=create");
        }else{
            echo "error";
            die;
        }
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



    public function search($request){
        $search = $request->getInput('search');
        $products = $this->db->getAll("SELECT * FROM `products`  WHERE `name` LIKE '%$search%' ");
        return require_once(ROOT_PATH.'views/products/view.php');
    }
}