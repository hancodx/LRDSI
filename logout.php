<?php
session_start();

if(isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] === true){
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("Location: auth.php");
        exit;
    }
}
?>
