<?php
session_start();
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['new_username']) && !empty($_POST['new_username']) && isset($_POST['new_password']) && !empty($_POST['new_password']) && isset($_POST['new_repassword']) && !empty($_POST['new_repassword']) && isset($_POST['new_email']) && !empty($_POST['new_email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_repassword = $_POST['new_repassword'];
    $new_email = $_POST['new_email'];

    $link = mysqli_connect("localhost", "root", "", "car_shop");
    if ($link != true) {
        echo "couldn't connect to the database";
    }
    $query = "UPDATE users SET username = '$new_username', password = '$new_password', email = '$new_email' WHERE username = '$username';";
    $result = mysqli_query($link, $query);
    if ($result == true) {
        $_SESSION['username'] = $new_username;
        $_SESSION['realname'] = $new_realname;
        $_SESSION['email'] = $new_email;
        echo "<script>
            window.location.href = 'http://localhost/carWeb/php/index.php';
            alert('اطلاعات حساب شما تغییر کرد. لطفا دوباره وارد شوید !');
        </script>";
    } else {
        echo "an error occurred during the process";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه تغییر اطلاعات</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
    <div class="inputContainerSignUp">
        <div class="inputBox">
            <form action="" method="post">
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>نام کاربری :</p>
                    </div>
                    <input type="text" name="username" id="username" placeholder="نام کاربری خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>رمز عبور :</p>
                    </div>
                    <input type="text" name="password" id="password" placeholder="رمز عبور خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>نام کاربری جدید :</p>
                    </div>
                    <input type="text" name="new_username" id="new_username"
                        placeholder="نام کاربری جدید خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>رمز عبور جدید :</p>
                    </div>
                    <input type="text" name="new_password" id="new_password"
                        placeholder="رمز عبور جدید خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>تکرار رمز عبور جدید :</p>
                    </div>
                    <input type="text" name="new_repassword" id="new_repassword"
                        placeholder="تکرار رمز عبور جدید خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <div class="inputTextContainer">
                        <p>نشانی الکترونیکی جدید :</p>
                    </div>
                    <input type="text" name="new_email" id="new_email"
                        placeholder="نشانی الکترونیکی جدید خود را وارد کنید ..." />
                </div>
                <div class="inputField">
                    <input type="submit" value="ورود" id="submitBtn" />
                    <input type="reset" value="بازنشانی" id="resetBtn" />
                </div>
                <div class="confirmBox">
                    <p>ورود شما تایید شد</p>
                </div>
                <div class="rejectBox">
                    <p>
                        ورود شما با مشکل مواجه شد. رمز عبور یا نام کاربری اشتباه است !
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>