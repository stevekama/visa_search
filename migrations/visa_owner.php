<?php 

require_once(INIT_PATH.DS.'initialization.php');

class Visa_owner_migration{
    private $conn;

    // table name and schema 
    private $table_name = "visa_owner";

    // connect to db
    public function __construct(){
        global $database;
        $this->conn = $database->connect();
    }

    // create table
    public function create()
    {
        $query = "CREATE TABLE IF NOT EXISTS ".$this->table_name."(";
        $query .= "id INT(11) UNSIGNED  NOT NULL PRIMARY KEY AUTO_INCREMENT, ";
        $query .= "fullnames VARCHAR(200) NOT NULL, ";
        $query .= "phone VARCHAR(200) NOT NULL, ";
        $query .= "description TEXT NOT NULL, ";
        $query .= "nationality VARCHAR(200) NOT NULL, ";
        $query .= "gender DATE NOT NULL, ";
        $query .= "date_birth VARCHAR(200) NOT NULL, ";
        $query .= "proffession TEXT NOT NULL, ";
        $query .= "sponsor_name VARCHAR(200) NOT NULL";
        $query .= ")";

        // execute query 
        $this->conn->exec($query);
        return true;
    }

     // drop table 
    public function drop()
    {
        $query = "DROP TABLE ".$this->table_name;
        
        $this->conn->exec($query);
        return true;
    }


}