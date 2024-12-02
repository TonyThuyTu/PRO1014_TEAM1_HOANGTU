<main class="main-content">
        <h1>Quản lý sản phẩm</h1>
        
        <!-- Thanh tìm kiếm -->
        <form action="index.php?pg=qlsanpham" method = "post">
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm sản phẩm,..." name = "kyw">
            
        </div>
        
        <select class="search-bar" name="car_brands">
                <option value="0">Tất cả</option>
                    <?php
                        foreach($listdanhmuc as $dm){
                            extract($dm);
                            echo "<option value=$id_brands>$brands</option>";
                        }
                    ?>
        
                    <!-- <option value="">Toyota</option> -->
        </select>
        
        <input type="submit" name = "listok" value = "Tìm kiếm">
        </form>

        <!-- Bảng danh sách lịch mua -->
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>STT</th>
                    
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Model</th>
                    <th>Năm sản xuất</th>
                    <th>Số lượng</th>
                    <th>Nhiên liệu</th>
                    <th>Màu sắc</th>
                    <th>Số ghế</th>
                    <th>Loại động cơ</th>
                    <th>Loại hộp số</th>
                    <th>Số KM đã đi</th>
                    <th>Hình xe</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            
            foreach ($listsanpham as $sanpham){
                extract($sanpham);

                $suasp = "index.php?pg=suasp&id=" . $id_products;
                $xoasp = "index.php?pg=xoasp&id=" . $id_products;

                $hinh_anh_xe = "../upload/" . $img;
                        if (is_file($hinh_anh_xe)) {
                            $hinh = "<img src='$hinh_anh_xe' height='auto' width='200'>";
                        } else {
                            $hinh = " không có hình";
                        }

                echo '<tbody>
                        <tr>
                            <td>'.$id_products.'</td>
                            
                            <td>'.$name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$description.'</td>
                            <td>'.$model.'</td>
                            <td>'.$year.'</td>
                            <td>'.$quantity.'</td>
                            <td>'.$fuel.'</td>
                            <td>'.$color.'</td>
                            <td>'.$chair_num.'</td>
                            <td>'.$motor.'</td>
                            <td>'.$gear.'</td>
                            <td>'.$km.' KM</td>
                            <td>'.$hinh.'</td>
                            <td>
                                <button class="edit-btn"><a href="'.$suasp.'">Sửa</a></button>
                        <button class="delete-btn"><a href="'.$xoasp.'">Xóa</a></button>
                            </td>
                        </tr>
                    </tbody>';
            }
            
            ?>
            <!-- <tbody>
                <tr>
                    <td>1</td>
                    <td>Toyota</td>
                    <td>Lexus LS500</td>
                    <td>5.000.000.000</td>
                    <td>Xe tuyệt vời</td>
                    <td>LS500</td>
                    <td>2024</td>
                    <td>10</td>
                    <td>Xăng</td>
                    <td>Trắng</td>
                    <td>5</td>
                    <td><img src="../img/31.png" width="200px"  alt=""></td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody> -->
            <thead>
                <tr>
                <th>STT</th>
                    
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Model</th>
                    <th>Năm sản xuất</th>
                    <th>Số lượng</th>
                    <th>Nhiên liệu</th>
                    <th>Màu sắc</th>
                    <th>Số ghế</th>
                    <th>Loại động cơ</th>
                    <th>Loại hộp số</th>
                    <th>Số KM đã đi</th>
                    <th>Hình xe</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    
        <!-- Nút thêm lịch -->
        <button class="add-btn"><a href="index.php?pg=themsanpham">Thêm sản phẩm</a></button>
    </main>