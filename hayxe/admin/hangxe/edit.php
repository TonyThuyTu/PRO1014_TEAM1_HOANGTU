<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=updatedm" method="post">

            <h1>Cập nhật hãng xe</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled value="<?php echo $id_brands ?>">
            
            <p>Hãng xe</p>
            <input type="text" name="brand" placeholder = "Hãng xe"  value="<?php echo $brands ?>">

            <input type="hidden" name="id_dm" value="<?php if(isset($id_brands) && $id_brands >0) echo $id_brands;?>">

            <input class="submit" type="submit" name="capnhat" value="Cập nhật">
            <a class="delete-btn" href="index.php?pg=qlhangxe">Hủy</a>

        </form>
        <?php
            if(isset($thongbao) && $thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
        
        <!-- Add more content here -->
</main>