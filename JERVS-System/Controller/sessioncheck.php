<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        echo '<script> alert("You must be logged in to view this page");window.location="index.php"</script>';
        exit();
    }
?>