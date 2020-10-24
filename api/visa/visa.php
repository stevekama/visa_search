<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once('../../init/initialization.php');

$data = array();

$d = new DateTime();

$visa = new Visa();

if($_POST['action'] == "FETCH_VISA_BY_NUMBER"){
    
    $visa_number = htmlentities($_POST['visa_number']);
    $nationality = htmlentities($_POST['nationality']);

    $current_visa = $visa->find_visa_by_visa_number_and_nationality($visa_number, $nationality);

    if(!$current_visa){
        $data['message'] = "errorVisa";
        echo json_encode($data);
        die();  
    }

    echo json_encode($current_visa);
}

if($_POST['action'] == "FETCH_VISA_BY_PASSPORT"){
    
    $passport_number = htmlentities($_POST['passport_number']);
    $nationality = htmlentities($_POST['nationality']);

    $current_visa = $visa->find_visa_by_passport_number_and_nationality($passport_number, $nationality);

    if(!$current_visa){
        $data['message'] = "errorVisa";
        echo json_encode($data);
        die();  
    }

    echo json_encode($current_visa);
}