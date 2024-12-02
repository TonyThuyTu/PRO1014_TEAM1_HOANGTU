<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=themsanpham" method="post" enctype="multipart/form-data">

            <h1>Thêm sản phẩm</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled>

            <p>Hãng xe</p>
            <select name="car_brands">
                    <?php
                        foreach($listdanhmuc as $dm){
                            extract($dm);
                            echo "<option value=$id_brands>$brands</option>";
                        }
                    ?>
        
                    <!-- <option value="">Toyota</option> -->
            </select>
            
            <p>Tên sản phẩm</p>
            <input type="text" name="car_name" placeholder = "Nhập tên sản phẩm...">

            <p>Giá sản phẩm</p>
            <input type="text" name="car_price" placeholder = "Nhập giá...">

            <p>Mô tả</p>
            <textarea type="text" name="car_des" placeholder = "Nhập mô tả...." rows="10" cols="50"></textarea>

            <p>Model</p>
            <input type="text" name="car_model" placeholder = "Nhập model....">

            <p>Năm sản xuất</p>
            <input type="text" name="car_year" placeholder = "Nhập năm sản xuất....">

            <p>Số lượng</p>
            <input type="text" name="car_quantity" placeholder = "Nhập số lượng...">

            <p>Nhiên liệu</p>
            <input type="text" name="car_fuel" placeholder = "Nhập nhiên liệu...">

            <p>Màu sắc</p>
            <input type="text" name="car_color" placeholder = "Nhập màu sắc...">

            <p>Số Ghế</p>
            <input type="text" name="car_chair" placeholder = "Nhập số ghế...">

            <p>Loại Hộp Số</p>
            <input type="text" name="gear" placeholder = "Nhập loại hộp số">

            <p>Số KM đã đi</p>
            <input type="text" name="km" placeholder = "Nhập số KM">

            <p>Loại động cơ</p>
            <input type="text" name="motor" placeholder = "Nhập loại động cơ">

            <p>Hình xe</p>
            <input type="file" name="hinh" placeholder = "Nhập">

            <input class="submit" type="submit" name="themmoi" value="Thêm">
            <a class="delete-btn" href="index.php?pg=qlsanpham">Hủy</a>

        </form>
        <?php
            if(isset($thongbao) &&$thongbao!=""){
                echo $thongbao;
            }
        ?>
    </div>
        
        <!-- Add more content here -->
</main>