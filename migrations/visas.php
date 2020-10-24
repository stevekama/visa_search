<?php 

require_once(INIT_PATH.DS.'initialization.php');

class Visa_migration{
    private $conn;

    // table name and schema 
    private $table_name = "visa";

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
        $query .= "owner_id INT(11) UNSIGNED  NOT NULL, ";
        $query .= "visa_number VARCHAR(200) NOT NULL, ";
        $query .= "application_number VARCHAR(200) NOT NULL, ";
        $query .= "date_issue DATE NOT NULL, ";
        $query .= "visa_validity VARCHAR(200) NOT NULL, ";
        $query .= "visa_type VARCHAR(200) NOT NULL, ";
        $query .= "purpose_for_visa VARCHAR(200) NOT NULL, ";
        $query .= "duration_residence VARCHAR(200) NOT NULL, ";
        $query .= "passport_number VARCHAR(200) NOT NULL, ";
        $query .= "travel_index VARCHAR(200) NOT NULL, ";
        $query .= "visa_status VARCHAR(200) NOT NULL";
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