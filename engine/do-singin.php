<?php
    require_once 'db.php';


    $display_name = $_POST["display-name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $password_conf = md5($_POST["password-conf"]);

    if($password != $password_conf)
    {
        echo 'رمز شما با تکرار رمز برابر نیستند.';
    }else{
        $register =mysqli_query($db, "INSERT INTO users (display_name,email,password) VALUES ('$display_name','$email','$password')");
    if($register)
    {
        header('Location:../login.php');
    }else{
        echo 'error';
    }
    }

    
        
?>
