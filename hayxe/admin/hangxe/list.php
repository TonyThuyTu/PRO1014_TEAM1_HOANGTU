<main class="main-content">
        <h1>Quản lý hãng xe</h1>
        
        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm..." id="search">
            <button>Tìm kiếm</button>
        </div>
    
        <!-- Bảng danh sách nhân viên -->
        <table class="employee-table" width = "80%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hãng Xe</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);

                $suadm = "index.php?pg=suadm&id=" . $id_brands;
                $xoadm = "index.php?pg=xoadm&id=" . $id_brands;

                echo '<tbody>
                        <tr>
                    <td>'. $id_brands .'</td>
                    <td>'. $brands .'</td>
                    <td>
                        <button class="edit-btn"><a href="'.$suadm.'">Sửa</a></button>
                        <button class="delete-btn"><a href="'.$xoadm.'">Xóa</a></button>
                    </td>
                        </tr>
                    </tbody>';
            }
            
            ?>
            <!-- <tbody>
                <tr>
                    <td>1</td>
                    <td>Toyota</td>
                    <td>
                        <button class="edit-btn"><a href="#">Sửa</a></button>
                        <button class="delete-btn"><a href="#">Xóa</a></button>
                    </td>
                </tr>
            </tbody> -->
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hãng xe</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    
        <!-- Nút thêm nhân viên -->
        <button class="add-btn"><a href="index.php?pg=themhang">Thêm hãng xe</a></button>
    </main>