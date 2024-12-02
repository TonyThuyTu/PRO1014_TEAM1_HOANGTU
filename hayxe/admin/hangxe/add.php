<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=themhang" method="post">

            <h1>Thêm hãng xe</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled>
            
            <p>Hãng xe</p>
            <input type="text" name="brand" placeholder = "Hãng xe">

            <input class="submit" type="submit" name="themmoi" value="Thêm">
            <a class="delete-btn" href="index.php?pg=qlhangxe">Hủy</a>

        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
        
        <!-- Add more content here -->
</main>