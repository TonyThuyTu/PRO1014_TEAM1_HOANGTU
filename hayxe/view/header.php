<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="icon" type="image/x-icon" href="./img/images.jpg">
    <title>Home</title>
</head>
<body>
    <!-- Header -->
    <section class="header">
        <div class="menu">
            <nav>
                <p>LEXUS</p>
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="index.php?pg=buy">Mua Xe</a></li>
                    <li><a href="index.php?pg=sell">Bán Xe</a></li>
                  
                    <li><a href="index.php?pg=about">Giới Thiệu</a></li>
                </ul>
            <?php
                if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                    extract($_SESSION["user"]);
            ?>
                <div class="account">
                    <a href="index.php?pg=acc">Xin chào <?php echo $name ?></a>
                </div>

            <?php
            } else {
            ?>

            <div class="account">
                    <a href="index.php?pg=login">Đăng Nhập</a>
            </div>

            <?php } ?>
                
            </nav>
        </div>
    </section>
