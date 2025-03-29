<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست ادمین ها</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
    <div class="adminListContainer">
        <div class="adminListBox">
            <div class="titleBar">
                <div class="realnameField">
                    <p>نام و نام خانوادگی</p>
                </div>
                <div class="usernameField">
                    <p>نام کاربری</p>
                </div>
                <div class="emailField">
                    <p>ایمیل</p>
                </div>
            </div>
            <div class="vrLine"></div>
            <div class="adminList">
                <?php
                // Connect to the database
                $link = mysqli_connect("localhost", "root", "", "car_shop");

                // Check connection
                if (!$link) {
                    echo "Connection failed: " . mysqli_connect_error();
                }

                $query = "SELECT realname, username, email FROM admins";
                $result = mysqli_query($link, $query);

                // Loop through the results and create admin bars
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='adminBar'>
                      <div class='adminRealname'>
                        <p>" . $row['realname'] . "</p>
                      </div>
                      <div class='adminUsername'>
                        <p>" . $row['username'] . "</p>
                      </div>
                      <div class='adminEmail'>
                        <p>" . $row['email'] . "</p>
                      </div>
                    </div>";
                }
                mysqli_close($link);
                ?>

            </div>
        </div>
    </div>
</body>

</html>