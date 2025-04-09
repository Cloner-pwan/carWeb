<?php

include("../html/productRegistration.html");

if (isset($_POST['pro_name']) && !empty($_POST['pro_name']) && isset($_POST['pro_code']) && !empty($_POST['pro_code']) && isset($_POST['pro_qty']) && !empty($_POST['pro_qty']) && isset($_POST['pro_price']) && !empty($_POST['pro_price']) && isset($_POST['pro_discount']) && isset($_POST['pro_image']) && !empty($_POST['pro_image']) && isset($_POST['pro_desc']) && !empty($_POST['pro_desc'])) {
    $pro_name = $_POST['pro_name'];
    $pro_code = $_POST['pro_code'];
    $pro_qty = $_POST['pro_qty'];
    $pro_price = $_POST['pro_price'];
    $pro_discount = $_POST['pro_discount'];
    $pro_image = $_POST['pro_image'];
    $pro_desc = $_POST['pro_desc'];

    $link = mysqli_connect('localhost', 'root', '', 'car_shop');
    if (!$link) {
        die('Query failed: ' . mysqli_error($link));
    }
    $query = "INSERT INTO products (title,description,imageAddress,pro_code,price,discount,qty)
    VALUES ('$pro_name','$pro_desc','$pro_image','$pro_code','$pro_price','$pro_discount','$pro_qty')";
    $result = mysqli_query($link, $query);
    if ($result == true) {
        echo "<script>
        let confirmBox = document.querySelector('.confirmBox');
        confirmBox.style.transition = '400ms';
        confirmBox.style.display = 'flex';
        resetBtn.addEventListener('click', () => {
        confirmBox.style.display = 'none';
        });
        </script>";
    } else {
        echo "<script>
        let rejectBox = document.querySelector('.rejectBox');
        rejectBox.style.transition = '400ms';
        rejectBox.style.display = 'flex';
        resetBtn.addEventListener('click', () => {
        rejectBox.style.display = 'none';
        });
        </script>";
    }


}
?>