<?php
    if(is_array($nv)){
        extract($nv);
    }
?>
<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=updatenv" method="post">

            <h1>Sửa nhân viên</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled value="<?php echo $id_employee ?>">
            
            <p>Họ nhân viên</p>
            <input type="text" name="last_name" placeholder = "Nhập họ..." value="<?php echo $last_name ?>">

            <p>Tên nhân viên</p>
            <input type="text" name="first_name" placeholder = "Nhập tên..." value="<?php echo $given_name ?>">

            <p>Số điện thoại</p>
            <input type="text" name="phone" placeholder = "Nhập số điện thoại..." value="<?php echo $phone ?>">

            <p>Email</p>
            <input type="text" name="email" placeholder = "Nhập email..." value="<?php echo $email ?>">

            <p>Pass</p>
            <input type="text" name="pass" placeholder = "Nhập mật khẩu..." value="<?php echo $pass ?>">

            <p>Vai trò</p>
            <input type="text" name="role" placeholder = "Nhập vai trò..." value="<?php echo $role ?>">

            <input type="hidden" name="id_nv" value="<?php if(isset($id_employee) && $id_employee >0) echo $id_employee;?>">
            <input class="submit" type="submit" name="capnhatnv" value="Cập nhật">
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