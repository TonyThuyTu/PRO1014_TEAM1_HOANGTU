<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=themnhanvien" method="post">

            <h1>Thêm nhân viên</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled>
            
            <p>Họ nhân viên</p>
            <input type="text" name="last_name" placeholder = "Nhập họ...">

            <p>Tên nhân viên</p>
            <input type="text" name="first_name" placeholder = "Nhập tên...">

            <p>Số điện thoại</p>
            <input type="text" name="phone" placeholder = "Nhập số điện thoại...">

            <p>Email</p>
            <input type="text" name="email" placeholder = "Nhập email...">

            <p>Pass</p>
            <input type="text" name="pass" placeholder = "Nhập mật khẩu...">

            <p>Vai trò</p>
            <input type="text" name="role" placeholder = "Nhập vai trò">

            <input class="submit" type="submit" name="themmoi" value="Thêm">
            <a class="delete-btn" href="index.php?pg=qlnhanvien">Hủy</a>

        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
        
        <!-- Add more content here -->
</main>