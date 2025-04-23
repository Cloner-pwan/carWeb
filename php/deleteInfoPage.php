<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $link = mysqli_connect("localhost", "root", "", "car_shop");
    if ($link) {
        echo "connected";
    } else {
        echo "could not connect";
    }
    $queryDeleteUserAccount = "DELETE FROM users WHERE username = '$username'";
    $result = mysqli_query($link, $queryDeleteUserAccount);
    if ($result) {
        header("Location: index.php");
        echo "<script>alert('حساب شما با موفقیت حذف شد !')</script>";        
    } else {
        echo "<p>could not delete the user account</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <button id="delete">delete</button>
    </form>
</body>

</html>