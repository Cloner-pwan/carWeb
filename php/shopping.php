<?php
if (isset($_POST['pro_code'])) {
    $pro_code = $_POST['pro_code'];
    echo $pro_code;
    $link = mysqli_connect("localhost","root","","car_shop");
    $queryShowData = "SELECT title, description, imageAddress,pro_code,price,discount,qty FROM products WHERE pro_code = '$pro_code'";
    $result = mysqli_query($link,$queryShowData);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['title'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت سفارش</title>
</head>
<body>
</body>
</html>