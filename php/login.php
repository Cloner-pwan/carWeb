<?php
include("../html/login.html");
$link = mysqli_connect("localhost", "root", "", "car_shop");

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT username, password from users where username = '$username' AND password = '$password'";
    $result = mysqli_query($link, $query);

    $queryCheckAdmin = "SELECT username, password from admins where username = 'admin' AND password = '$password'";
    $result2 = mysqli_query($link, $queryCheckAdmin);
    if ($result2 && mysqli_num_rows($result2) > 0) {
        echo "<script>
            let confirmBox = document.querySelector('.confirmBox');
            confirmBox.style.display = 'flex';
            setTimeout(() => {
            window.location.href = `http://localhost/carWeb/php/admin.php`;
            }, 3000);
            </script>";
    } else {
        echo "<script>
            let rejectBox = document.querySelector('.rejectBox');
            rejectBox.style.display = 'flex';
            </script>";
    }



    // $result = mysqli_query($link, $query);
    // if ($result && mysqli_num_rows($result) > 0) {
    //     echo "true";
    // } else {
    //     echo "Invalid username or password.";
    // }

}
?>