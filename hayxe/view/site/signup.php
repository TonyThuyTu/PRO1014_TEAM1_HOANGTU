<link rel="stylesheet" href="./style/acc.css">
<section class="body">
    <img src="./img/my22-lx-performance-m.jpg" width="100%" alt="">

    <div class="login-container">
        <form action="index.php?pg=signup" method="post">
            <h1>Đăng Ký</h1>
            
            <p>Tên đăng nhập</p>
            <input type="text" name="name" placeholder="Nhập tên đăng nhập của bạn">

            <p>Số điện thoại</p>
            <input type="text" name="phone" placeholder="Nhập số điện thoại của bạn">

            <p>Email</p>
            <input type="text" name="email" placeholder="Nhập email của bạn">

            <p>Mật khẩu</p>
            <input type="text" name="pass" placeholder="Nhập mật khẩu của bạn">
            
            <input class="submit" type="submit" name="dangky" value="Đăng Ký">

            <div class="check">
                <p>Đã có tài khoản, đăng nhập <a href="index.php?pg=login">tại đây</a></p>
            </div>
        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
</section>