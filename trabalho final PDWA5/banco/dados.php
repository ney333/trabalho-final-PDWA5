<?php
class dados{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "fatesc";
    private $username = "root";
    private $password = "";
    public $conn;
  
    // conecta a base de dados
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>