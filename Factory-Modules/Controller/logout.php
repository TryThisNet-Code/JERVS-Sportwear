<?php
    session_start();
    
    unset($_SESSION['member']);

    echo '<script> alert("Logging Out"); </script>';
    header('Location: ../view/auth/index.php');
    exit;
?>