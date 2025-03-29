<?php
include("../html/singUp.html");
if (isset($_POST['realname']) && !empty($_POST['realname']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['repassword']) && !empty($_POST['repassword']) && isset($_POST['email']) && !empty($_POST['email'])) {
    $realname = $_POST['realname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];

    $link = mysqli_connect("localhost", "root", "", "car_shop");
    if (mysqli_connect_errno()) {
        exit("خطا به شرح زیر است" . mysqli_connect_errno());
    }
    if ($username == "admin"){
        $queryAddAdmin = "INSERT INTO admins (realname,username,password,email,type)
        VALUES ('$realname','$username','$password','$email','1')";
        if (mysqli_query( $link, $queryAddAdmin) === true) {
            echo "<script>
            // alert('عضویت شما با موفقیت ثبت شد');
            // 
            let confirmBox = document.querySelector('.confirmBox');
            confirmBox.style.display = 'flex';
            setTimeout(() => {
            window.location.href = `http://localhost/carWeb/php/index.php`;
            }, 3000);
            </script>";
        } else {
            echo "<script>
            let rejectBox = document.querySelector('.rejectBox');
            rejectBox.style.display = 'flex';
            </script>";
        }
    } else {
        $query = "INSERT INTO users (realname,username,password,email,type)
            VALUES ('$realname','$username','$password','$email','0')";
        if (mysqli_query($link, $query) === true) {
            echo "<script>
            // alert('عضویت شما با موفقیت ثبت شد');
            // 
            let confirmBox = document.querySelector('.confirmBox');
            confirmBox.style.display = 'flex';
            setTimeout(() => {
            window.location.href = `http://localhost/carWeb/php/index.php`;
            }, 3000);
            </script>";
        } else {
            echo "<script>
            let rejectBox = document.querySelector('.rejectBox');
            rejectBox.style.display = 'flex';
            </script>";
        }
    }
    }
?>