<!-- <?php
if (isset($_POST['pro_code'])) {
    $pro_code = $_POST['pro_code'];
    // echo $pro_code;
    $link = mysqli_connect("localhost", "root", "", "car_shop");
    $queryShowData = "SELECT title, description, imageAddress,pro_code,price,discount,qty FROM products WHERE pro_code = '$pro_code'";
    $result = mysqli_query($link, $queryShowData);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // echo $row['title'];
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت سفارش</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>

<body>
    <div class="prod_container">
        <div class="squareBox">
            <div class="leftSide_container">
                <img src="../img/bmw.jpg" alt="pic">
                <div class="price_container">
                    <div class="price">
                        <p>3,000,000,000</p>
                    </div>
                    <div class="discount">
                        <p>15%</p>
                    </div>
                    <div class="discounted">
                        <p>2,550,000,000</p>
                    </div>
                </div>
            </div>
            <div class="rightSide_container">
                <div class="title">
                    <p>bmw مدل i320 سال ساخت 2019 </p>
                </div>
                <div class="vrLine"></div>
                <div class="pro_code">
                    <p>کد : 221</p>
                </div>
                <div class="desc">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                </div>
                <form action="" method="POST">
                    <input type="hidden" name="pro_code" value="">
                    <button id="shoppingBtn">ثبت نهایی خرید</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>