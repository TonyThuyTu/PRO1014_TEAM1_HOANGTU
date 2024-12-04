<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">LEXUS</div>
        <div class="user-menu">
        <?php
                if(isset($_SESSION["user"]) && is_array($_SESSION["user"])) 
                    extract($_SESSION["user"]);
                ?>

                <span>Welcome,</span>
                <button><a href="index.php?pg=out">Thoát</a></button>
       
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar">
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="index.php?pg=qlkhachhang">Quản lí khách hàng</a></li>
                <li><a href="index.php?pg=qlnhanvien">Quản lí nhân viên</a></li>
                <li><a href="index.php?pg=qllichmua">Quản lý lịch mua xe</a></li>
                <li><a href="index.php?pg=qllichban">Quản lý lịch bán xe</a></li>
                <li><a href="index.php?pg=qlsanpham">Quản lý sản phẩm</a></li>  
                <li><a href="index.php?pg=qlhangxe">Quản lý Hãng Xe</a></li>  
            </ul>
        </nav>
    </aside>