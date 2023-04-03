<?php


require_once 'db_connect.php';



function show_all_orphans_data()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `orphan` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}




//