<?php
session_start();
// if (isset($_SESSION["username"])) {
//     echo $_SESSION['username'];
// }
if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username'];
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

</body>

</html>