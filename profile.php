<?php
    require_once 'engine/db.php';
    if(!isset($_SESSION['loggedin']))
    {
        header("Location:login.php");
    }
    $user_email = $_SESSION['loggedin'];
    $sql = mysqli_query($db,"SELECT * FROM users WHERE email='$user_email'");
    $fetch = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پروفایل کاربر</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body class="bg-secondary">
    <div id="profile">
    <h2>welcome <?php echo $fetch["display_name"]; ?></h2>
    <a href="logout.php">
        <button>خروج</button>
    </a><br>
    <a href="text.php">
        <button class="button1">نوشتن مطلب جدید</button>
    </a>
</body>
</html>