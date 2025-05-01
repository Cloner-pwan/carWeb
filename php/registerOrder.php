<?php
function calcPrice($price, $discount): mixed
{
    if ($discount != 0) {
        $mainPrice = $price;
        $discountPercent = $discount;
        $finalPrice = $mainPrice - (($discountPercent / 100) * $mainPrice);
        return $finalPrice;
    } else {
        return $price;
    }
}

if (isset($_POST['user_realname']) && isset($_POST['username']) && isset($_POST['postal_code']) && isset($_POST['phoneNumber']) && isset($_POST['pro_code']) && isset($_POST['address'])) {
    $user_realname = $_POST['user_realname'];
    $username = $_POST['username'];
    $postal_code = $_POST['postal_code'];
    $phoneNumber = $_POST['phoneNumber'];
    $pro_code = $_POST['pro_code'];
    $address = $_POST['address'];
}

$link = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "car_shop");
$queryReadInfo = "SELECT * from products WHERE pro_code = '$pro_code'";
$resultReadInfo = mysqli_query($link, $queryReadInfo);
if ($resultReadInfo && mysqli_num_rows($resultReadInfo) > 0) {
    $row = mysqli_fetch_assoc($resultReadInfo);
    $title = $row['title'];
    $price = $row['price'];
    $discount = $row['discount'];
}

$finalPrice = calcPrice($price, $discount);

$queryInsertInfo = "INSERT INTO orders (user_realname,username,user_phoneNumber,postal_code,pro_code,pro_name,price,discount,user_address,discounted) VALUES 
('$user_realname','$username','$phoneNumber','$postal_code','$pro_code','$title','$price','$discount','$address','$finalPrice')";
$result = mysqli_query($link, $queryInsertInfo);


?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاکتور</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script src="../JS/registerOrder.js" defer></script>
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
                        <p><?php echo $pro_code; ?></p>
                    </div>
                    <div class="items" id="pro_name">
                        <p><?php echo $title; ?></p>
                    </div>
                    <div class="items" id="price">
                        <p><?php echo number_format($price); ?></p>
                    </div>
                    <div class="items" id="discount">
                        <p><?php echo $discount; ?></p>
                    </div>
                    <div class="items" id="discounted">
                        <p><?php echo number_format(calcPrice($price, $discount)) ?></p>
                    </div>
                    <div class="items" id="user_realname">
                        <p><?php echo $user_realname; ?></p>
                    </div>
                    <div class="items" id="username">
                        <p><?php echo $username; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="address_container">
        <div class="title">
            <p>آدرس :</p>
        </div>
        <div class="addressBox">
            <div class="addressField">
                <p><?php echo $address; ?></p>
            </div>
        </div>
        <button id="printbtn">پرینت</button>
        <div class="postal_code">
            <p>کد پستی :</p>
        </div>
        <div class="postal_code_box">
            <p><?php echo $postal_code; ?></p>
        </div>
    </div>
</body>

</html>