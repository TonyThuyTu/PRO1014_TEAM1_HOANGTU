<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinh_anh_xe = "../upload/" . $img;
if (is_file($hinh_anh_xe)) {
    $hinh = "<img src='$hinh_anh_xe' height='auto' width='200'>";
} else {
    $hinh = " không có hình";
}
?>

<main class="main-content">

    <div class="login-container">
      
        <form action="index.php?pg=updatesp" method="post" enctype="multipart/form-data">

            <h1>Sửa sản phẩm</h1>

            <p>Mã loại</p>
            <input type="text" name="id" placeholder = "Mã" disabled>

            <p>Hãng xe</p>
            <select name="car_brands">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $dm) {
                        if($id_brands==$dm['id_brands']) $s="selected"; else $s="";
                        echo '<option value="'.$dm['id_brands'].'"'.$s.'>'.$dm['brands'].'</option>';
                    }
                    ?>
                </select>
            
            <p>Tên sản phẩm</p>
            <input type="text" name="car_name" placeholder = "Nhập tên sản phẩm..." value = "<?=$name?>">

            <p>Giá sản phẩm</p>
            <input type="text" name="car_price" placeholder = "Nhập giá..." value = "<?=$price?>">

            <p>Mô tả</p>
            <textarea type="text" name="car_des" placeholder = "Nhập mô tả...." rows="10" cols="50"><?=$description?></textarea>

            <p>Model</p>
            <input type="text" name="car_model" placeholder = "Nhập model...." value = "<?=$model?>">

            <p>Năm sản xuất</p>
            <input type="text" name="car_year" placeholder = "Nhập năm sản xuất...." value = "<?=$year?>">

            <p>Số lượng</p>
            <input type="text" name="car_quantity" placeholder = "Nhập số lượng..." value = "<?=$quantity?>">

            <p>Nhiên liệu</p>
            <input type="text" name="car_fuel" placeholder = "Nhập nhiên liệu..." value = "<?=$fuel?>">

            <p>Màu sắc</p>
            <input type="text" name="car_color" placeholder = "Nhập màu sắc..." value = "<?=$color?>">

            <p>Số Ghế</p>
            <input type="text" name="car_chair" placeholder = "Nhập số ghế..." value = "<?=$chair_num?>">

            <p>Số KM đã đi</p>
            <input type="text" name="km" placeholder = "Nhập số ghế..." value = "<?=$km?>">

            <p>Loại động cơ</p>
            <input type="text" name="motor" placeholder = "Nhập số ghế..." value = "<?=$motor?>">

            <p>Loại hộp số</p>
            <input type="text" name="gear" placeholder = "Nhập số ghế..." value = "<?=$gear?>">

            <p>Hình xe</p>
            <input type="file" name="hinh" placeholder = "Nhập ảnh....">
            <?=$hinh?>

            <input class="submit" type="submit" name="capnhat_sp" value="Cập nhật">
            <input type="hidden" name="id_pro" value = "<?php if(isset($id_products) && $id_products >0) echo $id_products;?>">
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