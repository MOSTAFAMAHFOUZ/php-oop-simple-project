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

        $this->conn = new mysqli($this->dbhost,$this->dbuser,$this->dbpassword,$this->dbname);
        if($this->conn->connect_errno){
            throw new ErrorException("Error in database connection " . $this->conn->connect_error);
        }
    }


    public function connect(){
    
        
    }



    public function insert($query){
        $result = $this->conn->query($query);
        return $result;
    }



    public function update($query){
        $result = $this->conn->query($query);
        return $result;
    }

    public function delete($query){
        $result = $this->conn->query($query);
        return $result;
    }


    public function getAll($query){
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRow($query){
        $result = $this->conn->query($query);
        return $result;
    }

    
}