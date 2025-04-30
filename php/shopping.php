<?php
if (isset($_POST['pro_code'])) {
    $pro_code = $_POST['pro_code'];
    $link = mysqli_connect("localhost", "root", "", "car_shop");
    $queryShowData = "SELECT title, description, imageAddress,pro_code,price,discount,qty FROM products WHERE pro_code = '$pro_code'";
    $result = mysqli_query($link, $queryShowData);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $pro_code = $row['pro_code'];
        $description = $row['description'];
        $price = $row['price'];
        $discount = $row['discount'];
        $imageAddress = $row['imageAddress'];
    }
}
function calcPrice($price,$discount) {
    if ($discount != 0) {
        $mainPrice = $price;
        $discountPercent = $discount;
        $finalPrice = $mainPrice - (($discountPercent / 100) * $mainPrice);
        return $finalPrice;
    } else {
        return $price;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت سفارش</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <script src="../JS/shopping.js" defer ></script>
</head>

<body>
    <div class="prod_container">
        <div class="squareBox">
           <?php
           echo " <div class='leftSide_container'>
            <img src='../img/" . $imageAddress . "' alt='pic'>
            <div class='price_container'>
                <div class='price'>
                    <p>" . number_format($price) . "</p>
                </div>
                <div class='discount'>
                    <p>" . $discount . "%</p>
                </div>
                <div class='discounted'>
                    <p>" . number_format(calcPrice($price,$discount)) ."</p>
                </div>
            </div>
        </div>
        <div class='rightSide_container'>
            <div class='title'>
                <p>" . $title . " </p>
            </div>
            <div class='vrLine'></div>
            <div class='pro_code'>
                <p>کد : " . $pro_code . "</p>
            </div>
            <div class='desc'>
                <p>" . $description . "</p>
            </div>
            <form action='shoppingProduct.php' method='POST'>
                <input type='hidden' name='pro_code' value=''>
                <button id='shoppingBtn'>ثبت نهایی خرید</button>
            </form>
        </div>";
           ?>
        </div>
    </div>
</body>

</html>