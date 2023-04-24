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

    $conn=mysqli_connect();
    if (!$conn) {
        die(print_r(sqlsrv_errors(), true));
    }
    else 
    echo 'vous etes connectés a la base de données';


<<<<<<< Updated upstream
?>
=======
    $sql =mysqli_query($conn, "select * from membre");
    if ($sql) {
        $row = mysqli_fetch_array($sql);
        for ($i=0; $i < 2; $i++) { 
            echo $row[$i];
        }
    }


?>
>>>>>>> Stashed changes
