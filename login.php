<?php
    require_once 'engine/db.php';
    if(isset($_SESSION['loggedin']))
    {
        header("Location:profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>ورود به حساب کاربری</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-secondary">
    <script src="bootstrap.min.js"></script>
    <div class="container border border-5 rounded mt-5 p-2 bg-light">
        <div class="row justify-content-center align-items-center">
            <div id="users">
                <form action="engine/do-login.php"method="post">
                    <input type="email" class="input form-control" name="email" placeholder="ایمیل شما ..."><br>
                    <input type="password" name="password" class="input form-control" placeholder="رمز شما ..."><br>
                    <input type="submit"name="do-login"class="btn btn-primary mt-2" value="ورود به حساب کاربری">
                </form>
            </div>
        </div>
    </div>    
</body>
</html>