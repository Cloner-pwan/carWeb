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
  <script src="../JS/main.js" defer></script>
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
          <div class="btn3" id="shoppingBasket">
            <button>
              سبد خرید
              <svg viewBox="0 0 512 512">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                  <path style="fill: #ffdc64"
                    d="M503.172,176.552H8.828c-4.875,0-8.828,3.953-8.828,8.828v44.138c0,4.875,3.953,8.828,8.828,8.828
        h9.416l15.418,231.278c0.928,13.912,12.482,24.722,26.424,24.722h391.828c13.942,0,25.496-10.809,26.424-24.722l15.419-231.278
        h9.416c4.875,0,8.828-3.953,8.828-8.828v-44.138C512,180.504,508.047,176.552,503.172,176.552z M132.414,432.552
        c0,9.75-7.905,17.655-17.655,17.655s-17.655-7.905-17.655-17.655V300.138c0-9.751,7.905-17.655,17.655-17.655
        s17.655,7.904,17.655,17.655V432.552z M203.034,432.552c0,9.75-7.905,17.655-17.655,17.655c-9.75,0-17.655-7.905-17.655-17.655
        V300.138c0-9.751,7.905-17.655,17.655-17.655c9.75,0,17.655,7.904,17.655,17.655V432.552z M273.655,432.552
        c0,9.75-7.905,17.655-17.655,17.655s-17.655-7.905-17.655-17.655V300.138c0-9.751,7.905-17.655,17.655-17.655
        s17.655,7.904,17.655,17.655V432.552z M344.276,432.552c0,9.75-7.905,17.655-17.655,17.655s-17.655-7.905-17.655-17.655V300.138
        c0-9.751,7.905-17.655,17.655-17.655s17.655,7.904,17.655,17.655V432.552z M414.897,432.552c0,9.75-7.905,17.655-17.655,17.655
        c-9.75,0-17.655-7.905-17.655-17.655V300.138c0-9.751,7.905-17.655,17.655-17.655c9.75,0,17.655,7.904,17.655,17.655V432.552z" />
                  <g>
                    <path style="fill: #ffc850" d="M18.243,238.345l15.418,231.278c0.928,13.912,12.482,24.722,26.424,24.722H86.51L71.876,274.829
            C71.197,264.639,79.279,256,89.492,256h403.087l1.177-17.655H18.243z" />
                    <path style="fill: #ffc850" d="M326.621,185.379c0,19.501,15.809,35.31,35.31,35.31s35.31-15.809,35.31-35.31
            c0-3.066-0.513-5.991-1.248-8.828H327.87C327.134,179.389,326.621,182.313,326.621,185.379z" />
                    <path style="fill: #ffc850" d="M114.759,185.379c0,19.501,15.809,35.31,35.31,35.31s35.31-15.809,35.31-35.31
            c0-3.066-0.513-5.991-1.248-8.828h-68.124C115.272,179.389,114.759,182.313,114.759,185.379z" />
                  </g>
                  <g>
                    <path style="fill: #707487" d="M141.238,203.501L141.238,203.501c8.445,4.875,19.242,1.982,24.117-6.462l88.276-152.898
            c4.875-8.445,1.982-19.242-6.462-24.117l0,0c-8.445-4.875-19.242-1.982-24.117,6.462l-88.276,152.898
            C129.901,187.828,132.794,198.626,141.238,203.501z" />
                    <path style="fill: #707487" d="M370.762,203.501L370.762,203.501c-8.445,4.875-19.242,1.982-24.117-6.462L258.369,44.141
            c-4.875-8.445-1.982-19.242,6.462-24.117l0,0c8.445-4.875,19.242-1.982,24.117,6.462l88.276,152.898
            C382.099,187.828,379.206,198.626,370.762,203.501z" />
                  </g>
                  <g>
                    <path style="fill: #5b5d6e" d="M247.169,20.023c-8.444-4.875-19.242-1.982-24.117,6.462l-88.276,152.898
            c-4.875,8.445-1.982,19.242,6.462,24.117l0,0L247.169,20.023L247.169,20.023z" />
                    <path style="fill: #5b5d6e" d="M264.831,20.023L264.831,20.023c-8.445,4.875-11.338,15.673-6.462,24.117l88.276,152.898
            c4.875,8.445,15.673,11.338,24.117,6.462l0,0L264.831,20.023z" />
                  </g>
                </svg>
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
            <a href="#">درباره ما</a>
          </div>
          <div class="items">
            <a href="#">ارتباط با ما</a>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="productsContainer">
    <div class="productsBoxContainer">
      <div class="productBox">
        <div class="productPicContainer">
          <img src="../img/bmw.jpg" alt="pic" />
        </div>
        <div class="title">
          <p>بی ام و 2019 مدل i320</p>
        </div>
        <div class="description">
          <p>
            وزن این خودرو 1495 کیلوگرم و حجم باک آن 60 لیتر است، همچنین دارای
            جدیدترین امکانات و آپشن‎های ممکن ازجمله سیستم‌های ترمز و پایداری،
            سیستم‌های امنیتی، سیستم تهویه هوا، سیستم صوتی و مالتی مدیا، سیستم
            روشنایی، آینه و شیشه‌ها و سایر امکانات مانند سنسورهای کمکی و
            دوربین 360 درجه و سیستم کمکی نقطه کور است . سیستم کمکی نقطه کور
            است .
          </p>
        </div>
        <button id="shopbtn">خرید</button>
        <button id="showbtn">نمایش</button>
      </div>
      <div class="productBox">
        <div class="productPicContainer">
          <img src="../img/bmw.jpg" alt="pic" />
        </div>
        <div class="title">
          <p>بی ام و 2019 مدل i320</p>
        </div>
        <div class="description">
          <p>
            وزن این خودرو 1495 کیلوگرم و حجم باک آن 60 لیتر است، همچنین دارای
            جدیدترین امکانات و آپشن‎های ممکن ازجمله سیستم‌های ترمز و پایداری،
            سیستم‌های امنیتی، سیستم تهویه هوا، سیستم صوتی و مالتی مدیا، سیستم
            روشنایی، آینه و شیشه‌ها و سایر امکانات مانند سنسورهای کمکی و
            دوربین 360 درجه و سیستم کمکی نقطه کور است . سیستم کمکی نقطه کور
            است .
          </p>
        </div>
        <button id="shopbtn">خرید</button>
        <button id="showbtn">نمایش</button>
      </div>
    </div>
  </div>
</body>

</html>