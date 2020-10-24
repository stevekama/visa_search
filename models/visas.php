<?php 

require_once(INIT_PATH.DS.'initialization.php');

class Visa{
    
    private $conn;

    // table name and schema 
    private $table_name = "visa";

    // table properties
    public $id;
    public $owner_id;
    public $visa_number;
    public $application_number;
    public $date_issue;
    public $visa_validity;
    public $visa_type;
    public $purpose_for_visa;
    public $duration_residence;
    public $passport_number;
    public $travel_index;
    public $visa_status;

    // connect to db
    public function __construct(){
        global $database;
        $this->conn = $database->connect();
    }

    public function save()
    {
        $query = "";
        if(empty($this->id)){
            $query .= "INSERT INTO ".$this->table_name."(";
            $query .= "owner_id, visa_number, application_number, date_issue, ";
            $query .= "visa_validity, visa_type, purpose_for_visa, duration_residence, ";
            $query .= "passport_number,  travel_index, visa_status";
            $query .= ")VALUES(";
            $query .= ":owner_id, :visa_number, :application_number, :date_issue, ";
            $query .= ":visa_validity, :visa_type, :purpose_for_visa, :duration_residence, ";
            $query .= ":passport_number,  :travel_index, :visa_status ";
            $query .= ")";

        }else{
            $query .= "UPDATE ".$this->table_name." SET ";
            $query .= "owner_id = :owner_id, visa_number = :visa_number, application_number = :application_number, date_issue = :date_issue, ";
            $query .= "visa_validity = :visa_validity, visa_type = :visa_type, purpose_for_visa = :purpose_for_visa, duration_residence = :duration_residence, ";
            $query .= "passport_number = :passport_number, travel_index = :travel_index, visa_status = :visa_status ";
            $query .= "WHERE id = :id";
        }

        // prepare query 
        $stmt = $this->conn->prepare($query);

         // clean up data
        if(!empty($this->id)){
            $this->id = htmlentities($this->id);
        }
        $this->owner_id = htmlentities($this->owner_id);
        $this->visa_number = htmlentities($this->visa_number);
        $this->application_number = htmlentities($this->application_number);
        $this->date_issue = htmlentities($this->date_issue);
        $this->visa_validity = htmlentities($this->visa_validity);
        $this->visa_type = htmlentities($this->visa_type);
        $this->purpose_for_visa = htmlentities($this->purpose_for_visa);
        $this->duration_residence = htmlentities($this->duration_residence);
        $this->passport_number = htmlentities($this->passport_number);
        $this->travel_index = htmlentities($this->travel_index);
        $this->visa_status = htmlentities($this->visa_status);

        // bindParam
        if(!empty($this->id)){
            $stmt->bindParam(':id', $this->id);
        }
        $stmt->bindParam(':owner_id', $this->owner_id);
        $stmt->bindParam(':visa_number', $this->visa_number);
        $stmt->bindParam(':application_number', $this->application_number);
        $stmt->bindParam(':date_issue', $this->date_issue);
        $stmt->bindParam(':visa_validity', $this->visa_validity);
        $stmt->bindParam(':visa_type', $this->visa_type);
        $stmt->bindParam(':purpose_for_visa', $this->purpose_for_visa);
        $stmt->bindParam(':duration_residence', $this->duration_residence);
        $stmt->bindParam(':passport_number', $this->passport_number);
        $stmt->bindParam(':travel_index', $this->travel_index);
        $stmt->bindParam(':visa_status', $this->visa_status);
        // execute query 
        if($stmt->execute()){
            if(empty($this->id)){
                $this->id = $this->conn->lastInsertId();
            }
            return true;
        }
    }

    // delete
    public function delete($id=0)
    {
        $query = "DELETE FROM ".$this->table_name." ";
        $query .= "WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        // clean up id
        $this->id = htmlentities($this->id);

        // execute
        if($stmt->execute(array('id'=>$id))){
            return true;
        }
    }

    // find by visa number and nationality
    public function find_visa_by_visa_number_and_nationality($visa_number = 0, $nationality = "")
    {
        $query  = "SELECT ";
        $query .= "visa.visa_number, visa_owner.fullnames, visa_owner.nationality, ";
        $query .= "visa.passport_number, visa_owner.description, visa_owner.gender, ";
        $query .= "visa.visa_type, visa.travel_index, visa.duration_residence, ";
        $query .= "visa.date_issue, visa.visa_validity, visa.visa_status ";
        $query .= "FROM ".$this->table_name." ";
        $query .= "INNER JOIN visa_owner ON visa.owner_id = visa_owner.id ";
        $query .= "WHERE visa.visa_number=:visa_number AND visa_owner.nationality = :nationality ";
        $query .= "LIMIT 1";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // clean up
        $visa_number = htmlentities($visa_number);
        $nationality = htmlentities($nationality);

        // execute query
        if($stmt->execute(array("visa_number"=>$visa_number, "nationality"=>$nationality))){
            $visa_details = $stmt->fetch(PDO::FETCH_ASSOC);
            return $visa_details;
        }
    }

    // find by passport number and nationality
    public function find_visa_by_passport_number_and_nationality($passport_number = 0, $nationality = "")
    {
        $query  = "SELECT ";
        $query .= "visa.visa_number, visa_owner.fullnames, visa_owner.nationality, ";
        $query .= "visa.passport_number, visa_owner.description, visa_owner.gender, ";
        $query .= "visa.visa_type, visa.travel_index, visa.duration_residence, ";
        $query .= "visa.date_issue, visa.visa_validity, visa.visa_status ";
        $query .= "FROM ".$this->table_name." ";
        $query .= "INNER JOIN visa_owner ON visa.owner_id = visa_owner.id ";
        $query .= "WHERE visa.passport_number=:passport_number AND visa_owner.nationality = :nationality ";
        $query .= "LIMIT 1";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // clean up
        $passport_number = htmlentities($passport_number);
        $nationality = htmlentities($nationality);

        // execute query
        if($stmt->execute(array("passport_number"=>$passport_number, "nationality"=>$nationality))){
            $visa_details = $stmt->fetch(PDO::FETCH_ASSOC);
            return $visa_details;
        }
    }
    
    
    public function find_visa_by_id($id=0)
    {
        $query = "SELECT * FROM ".$this->table_name." "; 
        $query .= "WHERE id = :id LIMIT 1";

        //Prepare statement 
        $stmt = $this->conn->prepare($query);

        // Execute query
        if($stmt->execute(array('id'=>$id))){
            $visa = $stmt->fetch(PDO::FETCH_ASSOC);
            // Set properties
            return $visa;
        }else{
            return false;
        }
    }
}