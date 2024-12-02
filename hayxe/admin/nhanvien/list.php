<main class="main-content">
        <h1>Quản lý nhân viên</h1>
        
        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm nhân viên..." id="search">
            <button>Tìm kiếm</button>
        </div>
    
        <!-- Bảng danh sách nhân viên -->
        <table class="employee-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
            </thead>
            <?php
            
            foreach ($listnhanvien as $nhanvien){
                extract($nhanvien);

                $suavn = "index.php?pg=suanv&id=" . $id_employee;
                $xoavn = "index.php?pg=xoanv&id=" . $id_employee;

                echo '<tr>
                    <td>'.$id_employee.'</td>
                    <td>'.$last_name.'</td>
                    <td>'.$given_name.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$role.'</td>
                    <td>
                        <button class="edit-btn"><a href="'.$suavn.'">Sửa</a></button>
                        <button class="delete-btn"><a href="'.$xoavn.'">Xóa</a></button>
                    </td>
                    </tr>';
            }

            
            ?>
            <!-- <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn</td>
                    <td>Văn A</td>
                    <td>0123455</td>
                    <td>employee@gmail.com</td>
                    <td>1234</td>
                    <td>1</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nguyễn</td>
                    <td>Văn A</td>
                    <td>0123455</td>
                    <td>employee@gmail.com</td>
                    <td>1234</td>
                    <td>1</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody> -->
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    
        <!-- Nút thêm nhân viên -->
        <button class="add-btn"><a href="index.php?pg=themnhanvien">Thêm nhân viên</a></button>
    </main>