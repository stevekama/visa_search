<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once('../../init/initialize_migration.php');

$owner_migration = new Visa_owner_migration();

$data = array();

// create table
if($_POST['action'] == "CREATE_TABLE"){
    $table = $owner_migration->create();
    if($table){
        $data['message'] = "success";
    }
    echo json_encode($data);
}

// delete table
if($_POST['action'] == "DELETE_TABLE"){
    $table = $owner_migration->drop();
    if($table){
        $data['message'] = "success";
    }

    echo json_encode($data);
}