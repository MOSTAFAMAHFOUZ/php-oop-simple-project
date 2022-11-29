<?php 




class User{

    private $db;
    private $response;
    public function __construct()
    {
        $this->db = new DB();
        $this->response = new Response();
    }


    public function index(){
        $users = $this->db->getAll("SELECT * FROM `users`");
        return require_once(ROOT_PATH.'views/users/view.php');
    }

    public function store($request){
        // sanitization
        $name = $request->postInput('name');
        $email = $request->postInput('email');
        $password = password_hash($request->postInput('password'),PASSWORD_DEFAULT);

        // validation

        // insert
        $query = "INSERT INTO `users` (`name`,`email`,`password`) VALUES('$name','$email','$password') ";
        $result = $this->db->insert($query);
        if($result){
            Session::setSession('success',"data added successfully");
            $this->response->redirect("users/index.php?page=create");
        }else{
            echo "error";
            die;
        }
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