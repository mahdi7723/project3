<?php
    require_once 'engine/db.php';
    unset($_SESSION['loggedin']);
    header("Location:login.php");
?>