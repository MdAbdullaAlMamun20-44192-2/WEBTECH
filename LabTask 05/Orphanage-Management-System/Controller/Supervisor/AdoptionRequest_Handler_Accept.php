<?php


require_once '../../Model/Supervisor.php';
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:../Views/Adopter/Login.php');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept'])) {
        $_SESSION["adoption_request_id"] = $_POST['accept'];
        $_POST['accept'] = "";
        echo $_SESSION["adoption_request_id"];
        // header("Location: ../../Views/Supervisor/AdoptionRequests.php");
    }
    if (isset($_POST['datepicker'])) {
        $_SESSION["appointment_date"] = $_POST['datepicker'];
        echo $_SESSION["appointment_date"];
        echo $_SESSION["adoption_request_id"];


        // TODO: Here Put data into Appointment Table,

        $req_data = search_specific_data("orphan_name,adopter_name,adopter_phone", "adoption_request", "request_id ", $_SESSION["adoption_request_id"]);

        $appointment_data = array(

            'orphan_name'          =>      $req_data['orphan_name'],
            'adopter_name'     =>     $req_data['adopter_name'],
            'adopter_phone'               =>     $req_data['adopter_phone'],
            'supervisor_phone'     =>     $req_data['phone'],
            'date_time'     =>    $_SESSION["appointment_date"]
        );

        // TODO: Insert the data to Supervisor table

        $is_successful =  add_supervisor($signup_data);
        if ($is_successful) {
            echo "Data Stored";
            header('Location:../../Views/Supervisor/AdoptionRequests.php');
        } else {
            header('Location:../../Views/Supervisor/Login.php');
        }
    } else {
        echo "Error";
        die("Error");
    }
}
