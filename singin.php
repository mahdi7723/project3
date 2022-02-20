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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-secondary">
    <script src="bootstrap.min.js"></script>
    <div class="container border border-5 rounded mt-5 p-2 bg-light">
        <div class="row justify-content-center align-items-center">
                <form action="engine/do-singin.php" method="post">
                    <input type="text" name="display-name" class="input form-control" placeholder="نام شما ..."><br>
                    <input type="email" class="input form-control" name="email" placeholder="ایمیل شما ..."><br>
                    <input type="password" name="password" class="input form-control" placeholder="رمز شما ..."><br>
                    <input type="password" name="password-conf" class="input form-control" placeholder="رمز تکرار شما ..."><br>
                    <input type="submit"name="do-singin" class="btn btn-primary mt-2" value="ثبت نام">
                    <a href="login.php" class="d-flex flex-row">login</a>
                </form>
        </div>
    </div>
</body>
</html>
