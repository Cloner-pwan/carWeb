<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحه ی حذف کالا</title>
  <link rel="stylesheet" href="../css/main.css" type="text/css">
  <script src="../JS/adminPageBtn.js" defer></script>
</head>

<body>
  <div class="inputContainerSignUp">
    <div class="inputBox">
      <form action="#" method="post" id="form">
        <div class="inputField">
          <div class="inputTextContainer">
            <p>کد کالا :</p>
          </div>
          <input type="text" name="delete_pro" id="delete_pro" placeholder="کد کالا جهت حذف وارد کنید ..." />
        </div>
        <div class="inputField">
          <input type="submit" value="حذف" id="deleteBtn" />
          <input type="reset" value="بازنشانی" id="resetBtn" />
          <input type="button" value="بازگشت به صفحه اصلی" id="adminPageBtn">
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
</body>

</html>


<?php
if (isset($_POST['delete_pro']) && !empty($_POST['delete_pro'])) {
  $pro_code = $_POST['delete_pro'];
  $link = mysqli_connect('localhost', 'root', '', 'car_shop');
  $query = "DELETE FROM products WHERE pro_code = '$pro_code'";
  if ($link == false) {
    die('could not connect to the database' . mysqli_connect_error());
  }
  $result = mysqli_query($link, $query);
  if ($result == true) {
    echo "deleted";
  } else {
    echo "could not delete";
  }
}
?>