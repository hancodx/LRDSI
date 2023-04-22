<?php
    
    $servername = "localhost\SQLEXPRESS02";
    $database = "LRDSI";
    $uid = "";
    $pass = "";
     

    $connection = [
        "database" => $database,
        "uid" => $uid,
        "PWD" => $pass 
    ];

    $conn=sqlsrv_connect($servername, $connection);
    if (!$conn) {
        die(print_r(sqlsrv_errors(), true));
    }
    else 
    echo 'connection established';


?>