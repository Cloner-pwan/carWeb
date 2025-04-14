<?php
session_start();
$username = $_COOKIE['username'];
$link = mysqli_connect('localhost', 'root', '', 'car_shop');
if ($link == false) {
    echo 'error: ' . mysqli_errno($link);
} else {
    echo "connected";
}
$query = "SELECT realname, username, email FROM users where username = '$username' ";
$result = mysqli_query($link, $query);
if ($result && $row = $result->fetch_assoc()) {
    $realname = $row['realname'];
    $username = $row['username'];
    $email = $row['email'];
} else {
    $realname = "نام و نام خانوادگی شما یافت نشد !";
    $username = "نام کاربری یافت نشد !";
    $email = "نشانی الکترونیکی یافت نشد !";
}
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اطلاعات حساب</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>

<body>
    <div class="infoContainer">
        <div class="infoBox">
            <div class="topPart">
                <div class="realnameBox">
                    <p>نام و نام خانوادگی</p>
                </div>
                <div class="usernameBox">
                    <p>نام کاربری</p>
                </div>
                <div class="emailBox">
                    <p>نشانی الکترونیکی</p>
                </div>
            </div>
            <div class="bottomPart">
                <div class="realnameField">
                    <p><?php echo $realname; ?></p>
                </div>
                <div class="usernameField">
                    <p><?php echo $username; ?></p>
                </div>
                <div class="emailField">
                    <p><?php echo $email; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>