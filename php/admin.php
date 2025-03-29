<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین</title>
</head>

<body>
    <?php
    include("../html/admin.html");
    ?>

    <script>
        let mainPage = document.querySelector(".itemsContainer");
        mainPage.children[0].childNodes[3].addEventListener("click",()=>{
            window.location.href = `http://localhost/carWeb/php/index.php`;
        })
    </script>
</body>

</html>