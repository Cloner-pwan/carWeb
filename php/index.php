<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>فروش خودرو</title>
  <link rel="stylesheet" href="../css/main.css" type="text/css" />
  <script src="../JS/index.js" defer></script>
</head>

<body>
  <div class="headerContainer">
    <header>
      <div class="headerTop">
        <div class="logoContainer">
          <div class="logo">
            <img src="../img/Logo.png" alt="photo" />
          </div>
        </div>
        <div class="inputContainer">
          <input type="text" name="search" id="searchInput" value="" placeholder="جستجو" />
        </div>
        <div class="btnsContainer">
          <div class="btn2" id="signUp">
            <button>
              ثبت نام
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 9.56066L9.53033 12.0303C9.23744 12.3232 8.76256 12.3232 8.46967 12.0303C8.17678 11.7374 8.17678 11.2626 8.46967 10.9697L11.4697 7.96967C11.7626 7.67678 12.2374 7.67678 12.5303 7.96967L15.5303 10.9697C15.8232 11.2626 15.8232 11.7374 15.5303 12.0303C15.2374 12.3232 14.7626 12.3232 14.4697 12.0303L12 9.56066ZM12 13.5607L9.53033 16.0303C9.23744 16.3232 8.76256 16.3232 8.46967 16.0303C8.17678 15.7374 8.17678 15.2626 8.46967 14.9697L11.4697 11.9697C11.7626 11.6768 12.2374 11.6768 12.5303 11.9697L15.5303 14.9697C15.8232 15.2626 15.8232 15.7374 15.5303 16.0303C15.2374 16.3232 14.7626 16.3232 14.4697 16.0303L12 13.5607Z"
                  fill="#325EFC" />
              </svg>
            </button>
          </div>
          <div class="btn1" id="login">
            <button>
              <span>ورود</span>
              <script>
                let loginBtn = document.querySelector('#login');
                loginBtn.addEventListener('click', () => {
                  if (loginBtn.children[0].children[0].innerHTML === "ورود") {
                    window.location.href = "http://localhost/carWeb/php/login.php";
                  }
                })
              </script>
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.00098 11.999L16.001 11.999M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999"
                  stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.5"
                  d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17"
                  stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="headerBottom">
        <!-- صفحه اصلی مدیریت محصول درباره ما ارتباط با ما خروج از سایت  -->
        <div class="itemsContainer">
          <div class="items">
            <svg width="800px" height="800px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 12.32H22" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M2 18.32H22" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M2 6.32001H22" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <a href="#">صفحه اصلی</a>
          </div>
          <div class="items">
            <a href="../html/about.html">درباره ما</a>
          </div>
          <div class="items">
            <a href="../html/contact.html">ارتباط با ما</a>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="productsContainer">
    <div class="productsBoxContainer">
      <?php
      $link = mysqli_connect("localhost", "root", "", "car_shop");
      $query = "SELECT title, description, imageAddress, pro_code, price, discount,qty FROM products";
      $result = mysqli_query($link, $query);
      while ($row = mysqli_fetch_array($result)) {
        echo "<div class='productBox'>
            <div class='productPicContainer'>
             <img src='../img/" . $row['imageAddress'] . "' alt='pic' />
            </div>
            <div class='title'>
              <p>" . $row['title'] . "</p>
            </div>
            <div class='pro_code'>
              <p>" . "کد " . $row['pro_code'] . "</p>
            </div>
            <div class='description'>
              <p>" . $row['description'] . "</p>
            </div>
            <div class='price'>
            <p>" . "قیمت : " . number_format($row['price']) . "</p>
            </div>
            <form action='' method='POST'>
            <input type='hidden' name='pro_code' value='". $row['pro_code'] ."'/>
            <button class='shopbtn'>خرید</button>
            </form>";


        // Conditional display for discount section
        if ($row['discount'] != 0) {
          echo "<div class='discount'>
                    <p>" . $row['discount'] . "%" . "</p>
                </div>";
        }
        echo "</div>";
      }
      $queryCheckIfEmpty = "SELECT * FROM products";
      $resultCheckIfEmpty = mysqli_query($link, $queryCheckIfEmpty);
      if ($resultCheckIfEmpty && mysqli_num_rows($resultCheckIfEmpty) <= 0) {
        echo " <div class='ifEmpty'>
                <p>در حال حاضر کالایی موجود نمی‌باشد</p>
            </div>";
      }
      mysqli_close($link);
      ?>
    </div>

  </div>
</body>

</html>