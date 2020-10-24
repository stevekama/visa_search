<?php
class Database
{

    private $host = 'klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    private $username = 'axy0h47ia71vuini';
    private $password = 'my7mpqmd843r1h0f';
    private $dbname = 'em3yymfvbqvsc8ez';

    // private $host = 'localhost';
    // private $username = 'root';
    // private $password = '';
    // private $dbname = 'visa_search';

    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }
}

$database = new Database();