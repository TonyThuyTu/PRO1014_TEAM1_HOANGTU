
<link rel="stylesheet" href="./style/acc.css">
<section class="body">
    <img src="./img/my22-lx-performance-m.jpg" width="100%" alt="">

    <div class="login-container">
        <?php
            if(isset($_SESSION["user"]) && is_array($_SESSION["user"])){
                extract($_SESSION["user"]);
            }
        ?>
        
        <form action="index.php?pg=edit" method="post">
            <h1>Thông tin khách hàng</h1>
            
            <p>Tên đăng nhập</p>
            <input type="text" name="name" value="<?php echo $name ?>">

            <p>Số điện thoại</p>
            <input type="text" name="phone" value="<?php echo $phone ?>">

            <p>Email</p>
            <input type="text" name="email" value="<?php echo $email ?>">

            <p>Mật khẩu</p>
            <input type="text" name="pass" value="<?php echo $pass ?>">
            
            <input type="hidden" name="id" value="<?php echo $id_customer ?>">

            <input class="submit" type="submit" name="capnhat" value="Cập nhật">

            <div class="check">
                <p><a href="index.php?pg=out">Đăng Xuất</a></p>
            </div>
        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
</section>