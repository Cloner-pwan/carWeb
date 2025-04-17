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
    // if new_realname exists, print it else print the realname
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
    <title>اطلاعات حساب <?php echo $realname ?></title>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <script src="../JS/accountInfo.js" defer></script>
</head>

<body>
    <!-- add the edit button and print function and a change password button -->
    <div class="infoContainer">
        <div class="topPart">
            <div class="text">
                <p>اطلاعات حساب</p>
            </div>
            <div class="changeInfoBtnContainer">
                <button id="changeInfoBtn">ویرایش</button>
            </div>
            <div class="printBtnContainer">
                <button id="printBtn">چاپ</button>
            </div>
        </div>
        <div class="infoBox">
            <div class="middlePart">
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
                    <p><?php echo $username;
                    if (isset($_SESSION['new_username'])) {
                        $username = $_SESSION['new_username'];
                        echo $username;
                    }
                    ?></p>
                </div>
                <div class="emailField">
                    <p><?php echo $email; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>