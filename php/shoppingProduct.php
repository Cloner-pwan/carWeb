<?php
session_start();
if (isset($_POST['pro_code'])) {
    $pro_code = $_POST['pro_code'];
    echo "<p>" . $pro_code . "</p>";
    $link = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "car_shop");
    $query = "SELECT title,price,discount,imageAddress FROM products WHERE pro_code = '$pro_code' ";
    if ($link == false) {
        echo "could not connect to the database";
    } else {
        echo "connected";
    }
    $result = mysqli_query($link, $query);
    if ($result == true) {
        echo "accessed the information";
    }
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $price = $row['price'];
        $discount = $row['discount'];
        $imageAddress = $row['imageAddress'];
    }
    function calcPrice($price, $discount)
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
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت سفارش</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script src="../JS/shoppingProduct.js" defer></script>
</head>

<body>
    <div class="shopping_container">
        <div class="shoppingBox">
            <div class="rightPart">
                <div class="inputBox">
                    <form action="registerOrder.php" method="post">
                        <div class="inputField">
                            <div class="inputTextContainer">
                                <p>نام و نام خانوادگی سفارش دهنده :</p>
                            </div>
                            <input type="text" name="user_realname" id="user_realname"
                                placeholder="نام و نام خانوادگی خود را وارد کنید ..." required />
                        </div>
                        <div class="inputField">
                            <div class="inputTextContainer">
                                <p>نام کاربری :</p>
                            </div>
                            <input type="text" name="username" id="username"
                                placeholder="نام کاربری خود را وارد کنید ..." <?php
                                if (isset($_COOKIE['username'])) {
                                    $username = $_COOKIE['username'];
                                    echo "value='$username'";
                                }
                                ?> required />
                        </div>
                        <div class="inputField">
                            <div class="inputTextContainer">
                                <p>کد پستی :</p>
                            </div>
                            <input type="text" name="postal_code" id="postal_code"
                                placeholder="کد پستی خود را وارد کنید ..." required />
                        </div>
                        <div class="inputField">
                            <div class="inputTextContainer">
                                <p>شماره تلفن :</p>
                            </div>
                            <input type="text" name="phoneNumber" id="phoneNumber"
                                placeholder="شماره تلفن خود را وارد کنید ..." required />
                        </div>
                        <div class="inputField">
                            <input type="submit" value="ثبت سفارش" id="submitBtn" />
                            <?php echo "<input type='hidden' name='pro_code' value='" . $pro_code . "'>" ?>
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
            <div class="leftPart">
                <div class="picturebox">
                    <?php echo "<img src='../img/" . $imageAddress . "' alt=''>" ?>
                </div>
                <div class="title">
                    <p><?php echo $title ?></p>
                </div>
                <div class="price">
                    <p><?php echo "قیمت : " . number_format($price) ?></p>
                </div>
                <div class="discount">
                    <p><?php echo "تخفیف :" . " %" . $discount ?></p>
                </div>
                <div class="discounted">
                    <p><?php echo "قیمت نهایی : " . number_format(calcPrice($price, $discount)) ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>