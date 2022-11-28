<?php 


class DB{

    private $conn;
    private $dbhost;
    private $dbuser;
    private $dbpassword;

    private $dbname;


    public function __construct()
    {
        $this->dbhost = DB_CONNECTION['dbhost'];
        $this->dbuser = DB_CONNECTION['dbuser'];
        $this->dbpassword = DB_CONNECTION['dbpassword'];
        $this->dbname = DB_CONNECTION['dbname'];
    }


    public function connect(){
    
        $this->conn = new mysqli($this->dbhost,$this->dbuser,$this->dbpassword,$this->dbname);
        if($this->conn->connect_errno){
            throw new ErrorException("Error in database connection " . $this->conn->connect_error);
        }
    }

    
}