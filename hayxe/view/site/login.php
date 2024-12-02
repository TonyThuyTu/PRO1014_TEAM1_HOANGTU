<link rel="stylesheet" href="./style/acc.css">
<section class="body">
    <img src="./img/my22-lx-performance-m.jpg" width="100%" alt="">

    <div class="login-container">
        <form action="index.php?pg=login" method="post">
            <h1>Đăng Nhập</h1>
            
            <p>Email đăng nhập</p>
            <input type="text" name="name" placeholder="Nhập tên đăng nhập của bạn">

            <p>Mật khẩu</p>
            <input type="text" name="pass" placeholder="Nhập mật khẩu của bạn">
            
            <input class="submit" type="submit" name="dangnhap" value="Đăng Nhập">

            <div class="check">
                <p>Chưa có tài khoản, đăng ký <a href="index.php?pg=signup">tại đây</a></p>
                <p>Quên mật khẩu <a href="index.php?pg=lost">tại đây</a></p>
            </div>
        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
</section>