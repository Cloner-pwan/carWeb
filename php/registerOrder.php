<?php
// if (isset($_POST['user_realname']) && isset($_POST['username']) && isset($_POST['postal_code']) && isset($_POST['phoneNumber']) && isset($_POST['pro_code'])) {
//     $user_realname = $_POST['user_realname'];
//     $username = $_POST['username'];
//     $postal_code = $_POST['postal_code'];
//     $phoneNumber = $_POST['phoneNumber'];
//     $pro_code = $_POST['pro_code'];
// }

// $link = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "car_shop");
// $queryReadInfo = "SELECT * from products WHERE pro_code = '$pro_code'";
// $resultReadInfo = mysqli_query($link, $queryReadInfo);
// if ($resultReadInfo && mysqli_num_rows($resultReadInfo) > 0) {
//     $row = mysqli_fetch_assoc($resultReadInfo);
//     $title = $row['title'];
//     $price = $row['price'];
//     $discount = $row['discount'];
// }
// $queryInsertInfo = "INSERT INTO orders (user_realname,username,user_phoneNumber,postal_code,pro_code,pro_name,price,discount) VALUES 
// ('$user_realname','$username','$phoneNumber','$postal_code','$pro_code','$title','$price','$discount')";
// $result = mysqli_query($link, $queryInsertInfo);
// if ($result == true) {
//     echo "the information is registered successfully";
// }

// if ($link == false) {
//     echo "could't connect to the database !";
// } else {
//     echo "connected to the database";
// }
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاکتور</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
    <div class="info_container">
        <div class="infoBox">
            <div class="top">
                <div class="user_realname">
                    <p>نام و نام خانوادگی : پارسا امامی</p>
                </div>
                <div class="date">
                    <p>تاریخ : <?php echo date("d F Y") ?></p>
                </div>
                <div class="factor_text">
                    <p>فاکتور خرید</p>
                </div>
            </div>
            <div class="tableBox">
                <div class="top_part">
                    <div class="items">
                        <p>کد کالا</p>
                    </div>
                    <div class="items" id="pro_name">
                        <p>نام کالا</p>
                    </div>
                    <div class="items">
                        <p>قیمت کالای خریداری شده</p>
                    </div>
                    <div class="items">
                        <p>درصد تخفیف</p>
                    </div>
                    <div class="items" id="discounted">
                        <p>قیمت نهایی کالا :</p>
                    </div>
                    <div class="items" id="user_realname">
                        <p>نام و نام خانوادگی خریدار</p>
                    </div>
                    <div class="items" id="username">
                        <p>نام کاربری</p>
                    </div>
                </div>
                <div class="bottom_part">
                <div class="items" id="pro_code">
                        <p>21</p>
                    </div>
                    <div class="items" id="pro_name">
                        <p>بی ام و 2019 مدل i320</p>
                    </div>
                    <div class="items" id="price">
                        <p>5,700,000,000</p>
                    </div>
                    <div class="items" id="discount">
                        <p>17%</p>
                    </div>
                    <div class="items" id="discounted">
                        <p>3,700,000,000</p>
                    </div>
                    <div class="items" id="user_realname">
                        <p>پارسا امامی</p>
                    </div>
                    <div class="items" id="username">
                        <p>cloner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="address_container">
        <div class="addressBox"></div>
    </div>
</body>

</html>