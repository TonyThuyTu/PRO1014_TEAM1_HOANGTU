<link rel="stylesheet" href="./style/acc.css">
<section class="body">
    <img src="./img/my22-lx-performance-m.jpg" width="100%" alt="">

    <div class="login-container">
        <form action="index.php?pg=lost" method="post">
            <h1>Quên Mật Khẩu</h1>
            
            <p>Email</p>
            <input type="text" name="email" placeholder="Nhập email của bạn">

         
            
            <input class="submit" type="submit" name="lost" value="Gữi">

            <div class="check">
                <p>Đã có tài khoản, đăng nhập <a href="index.php?pg=login">tại đây</a></p>
            </div>
            <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</section>