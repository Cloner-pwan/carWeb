<?php
if (isset($_POST['user_realname']) && isset($_POST['username']) && isset($_POST['postal_code']) && isset($_POST['phoneNumber'])) {
    $user_realname = $_POST['user_realname'];
    $username = $_POST['username'];
    $postal_code = $_POST['postal_code'];
    $phoneNumber = $_POST['phoneNumber'];
    $pro_code = $_POST["pro_code"];
}
$link = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "car_shop");
$query = "INSERT INTO orders (user_realname,username,user_phoneNumber,postal_code,pro_code) VALUES ('$user_realname','$username','$phoneNumber','$postal_code','$pro_code')";
$result = mysqli_query($link,$query);
if ($result == true) {
    echo "the information is registered successfully";
    echo $_POST['pro_code'];
}


if ($link == false) {
    echo "could't connect to the database !";
} else {
    echo "connected to the database";
}
?>