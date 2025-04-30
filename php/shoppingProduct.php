<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت سفارش</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>
    <div class="shopping_container">
        <div class="shoppingBox">
            <div class="rightPart">
            <div class="inputBox">
            <form action="" method="post">
              <div class="inputField">
                <div class="inputTextContainer">
                  <p>نام و نام خانوادگی سفارش دهنده :</p>
                </div>
                <input
                  type="text"
                  name="user_realname"
                  id="user_realname"
                  placeholder="نام و نام خانوادگی خود را وارد کنید ..."
                />
              </div>
              <div class="inputField">
                <div class="inputTextContainer">
                  <p>نام کاربری :</p>
                </div>
                <input
                  type="text"
                  name="username"
                  id="username"
                  placeholder="نام کاربری خود را وارد کنید ..."
                />
              </div>
              <div class="inputField">
                <div class="inputTextContainer">
                  <p>کد پستی :</p>
                </div>
                <input
                  type="text"
                  name="postal_code"
                  id="postal_code"
                  placeholder="کد پستی خود را وارد کنید ..."
                />
              </div>
              <div class="inputField">
                <input type="submit" value="ثبت سفارش" id="submitBtn" />
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
                    <img src="../img/bmw.jpg" alt="">
                </div>
                <div class="title">
                    <p>bmw i320 سال ساخت 2019</p>
                </div>
                <div class="price">
                    <p>قیمت : 3,000,000,000</p>
                </div>
                <div class="discount">
                    <p>تخفیف : %17</p>
                </div>
                <div class="discounted">
                    <p>قیمت نهایی : 2,500,000</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>